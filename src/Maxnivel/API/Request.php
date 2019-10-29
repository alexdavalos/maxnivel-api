<?php

namespace MaxNivel\API;

use \Exception;

class Request
{
    /**
     * Base url from api
     *
     * @var string
     */
    private $baseUrl = '';
    private $count = 0;

    /**
     * Request constructor.
     * @param MaxNivel $credentials
     */
    function __construct(MaxNivel $credentials)
    {

        $this->baseUrl = $credentials->getBaseUrl();

        if ($credentials->debug == true)
            print_r($this->baseUrl);

        if(!$credentials->getIsAuth())    
            return $this->auth($credentials);
    }


    /**
     * @param MaxNivel $credentials
     * @return MaxNivel
     * @throws Exception
     */
    function auth(MaxNivel $credentials)
    {
        $url_path = "/api/v1/auth/token";

        $params = [
            "scope"      => "",
            "grant_type" => $credentials->getGrantType()
        ];

        $queryString = http_build_query($params);

        try{
            $response = $this->send($credentials, $url_path, 'AUTH', $queryString);
        }catch (Exception $e){
            throw new Exception($e->getMessage(), 100);
        }

        
        $credentials->setAuthorizationToken($response["access_token"]);
        return $credentials;
    }

    /**
     * @param MaxNivel $credentials
     * @param $url_path
     * @param $method
     * @param null $json
     * @return mixed
     * @throws \Exception
     */
    
    private function send(MaxNivel $credentials, $url_path, $method, $json = NULL)
    {


        /** set get parameters */
        if (isset($json['query']) && count($json['query']) > 0) {
            $value = $json['query'];
            if (is_array($value)) {
                $value = http_build_query($value, null, '&');
            }
            if (!is_string($value)) {
                throw new \InvalidArgumentException('query must be a string or array');
            }
            $url_path = $url_path .'?'. $value;
            unset($json['query']);
        }
        
        /** config curl */

        $curl = curl_init($this->getFullUrl($url_path));

        $defaultCurlOptions = array(
            CURLOPT_CONNECTTIMEOUT => 60,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT        => 60,
            CURLOPT_HTTPHEADER     => array('Content-Type: application/json; charset=utf-8'),
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_SSL_VERIFYPEER => 0
        );

        if ($method == 'POST') {
            $defaultCurlOptions[ CURLOPT_HTTPHEADER ][] = 'Authorization: Bearer ' . $credentials->getAuthorizationToken();
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
        } elseif ($method == 'PUT') {
            $defaultCurlOptions[ CURLOPT_HTTPHEADER ][] = 'Authorization: Bearer ' . $credentials->getAuthorizationToken();
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
        } elseif ($method == 'GET') {
            $defaultCurlOptions[ CURLOPT_HTTPHEADER ][] = 'Authorization: Bearer ' . $credentials->getAuthorizationToken();
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET'); 
            curl_setopt($curl, CURLOPT_HTTPGET, true);
        } elseif ($method == 'AUTH') {
            $defaultCurlOptions[ CURLOPT_HTTPHEADER ][0] = 'application/x-www-form-urlencoded';
            curl_setopt($curl, CURLOPT_USERPWD, $credentials->getClientId() . ":" . $credentials->getClientSecret());
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
        }
        curl_setopt($curl, CURLOPT_ENCODING, "");
        curl_setopt_array($curl, $defaultCurlOptions);

        if ($credentials->debug === true) {

            print "\n\nJSON REQUEST\n";
            print_r($json);

            $info = curl_getinfo($curl);
            print_r($info);
            curl_setopt($curl, CURLOPT_VERBOSE, 1);
        }

        try {
            $response = curl_exec($curl);
        } catch (Exception $e) {
            print "ERROR";
        }
        if ($credentials->debug === true) {
            $info = curl_getinfo($curl);
            print_r($info);
            print_r(json_encode(json_decode($response), JSON_PRETTY_PRINT));
        }

        if (isset(json_decode($response)->error)) {
            
            /**
             * because this API don't return status_code on the error event
             * i decide to add manually on the object response and remove status property
             * another reason. STATUS property, is present on the result objects from endpoints that i need
             * /distribuidores, /clientes, /pedidos, /produtos
             */
            $error = json_decode($response);
            $status_code = $error->status;
            $error->status_code = $status_code;
            unset($error->status);
            throw new Exception(json_encode($error), 100);
        }

        if (curl_getinfo($curl, CURLINFO_HTTP_CODE) >= 400) {
            throw new Exception($response, 100);
        }
        if (!$response) {
            print "ERROR";
            EXIT;
        }
        curl_close($curl);
       

        return json_decode($response, true);
    }

    /**
     * Get request full url
     *
     * @param string $url_path
     * @return string $url(config) + $url_path
     */
    private function getFullUrl($url_path)
    {
        if (stripos($url_path, $this->baseUrl, 0) === 0) {
            return $url_path;
        }

        return $this->baseUrl . $url_path;
    }

    /**
     * @return string
     */
    public function setBaseUrl($base_url)
    {
        return $this->baseUrl = $base_url;
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }


    /**
     * @param MaxNivel $credentials
     * @param $url_path
     * @return mixed
     * @throws Exception
     */
    function get(MaxNivel $credentials, $url_path, $params)
    {
        return $this->send($credentials, $url_path, 'GET', $params);
    }


    /**
     * @param MaxNivel $credentials
     * @param $url_path
     * @param $params
     * @return mixed
     * @throws Exception
     */
    function post(MaxNivel $credentials, $url_path, $params)
    {
        return $this->send($credentials, $url_path, 'POST', $params);
    }


    /**
     * @param MaxNivel $credentials
     * @param $url_path
     * @param $params
     * @return mixed
     * @throws Exception
     */
    function put(MaxNivel $credentials, $url_path, $params)
    {
        return $this->send($credentials, $url_path, 'PUT', $params);
    }

}
