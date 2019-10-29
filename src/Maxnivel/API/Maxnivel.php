<?php
namespace MaxNivel\API;

use function GuzzleHttp\json_decode;

class MaxNivel
{
    /**
     * @var bool
     */
    public $debug = true;
    private $is_auth = true;
    /**
     * @var Request
     */
    private $client_id;
    /**
     * @var
     */
    private $client_secret;
     /**
     * @var
     */
    private $grant_type;
    /**
     * @var
     */
    private $base_url;
    /**
     * @var
     */
    private $authorizationToken;

    /**
     * MaxNivel constructor.
     * @param $client_id
     * @param $client_secret
     * @param $grant_type
     * @param $base_url
     */
    public function __construct($client_id, $client_secret, $grant_type, $base_url)
    {
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;
        $this->grant_type = $grant_type;
        $this->base_url = $base_url;

        $request = new Request($this);

        return $request->auth($this);
    }

    /**
     * @param boolean $debug
     */
    public function getIsAuth()
    {
        return $this->is_auth;
    }

    /**
     * @param boolean $debug
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
    }

    /**
     * @return $this
     */
    public function getAuthorizationToken()
    {
        return $this->authorizationToken;
    }

    /**
     * @param $this $authorizationToken
     */
    public function setAuthorizationToken($authorizationToken)
    {
        $this->authorizationToken = $authorizationToken;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * @param mixed $client_id
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
    }

    /**
     * @return mixed
     */
    public function getClientSecret()
    {
        return $this->client_secret;
    }

    /**
     * @param mixed $client_secret
     */
    public function setClientSecret($client_secret)
    {
        $this->client_secret = $client_secret;
    }

    /**
     * @return $grant_type
     */
    public function getGrantType()
    {
        return $this->grant_type;
    }

    /**
     * @param mixed $grant_type
     */
    public function setGrantType($grant_type)
    {
        $this->grant_type = $grant_type;
    }

    /**
     * @return $base_url
     */
    public function getBaseUrl()
    {
        return $this->base_url;
    }

    /**
     * @param mixed $base_url
     */
    public function setBaseUrl($base_url)
    {
        $this->base_url = $base_url;
    }


    /**
     * @param Pedido $pedido
     * @return mixed
     */
    //public function Pedido(Transaction $transaction, $item = [])
    public function EnviarPedido(Pedido $pedido, PedidoIten $iten)
    {
        try {
            $request = new Request($this);
            $response = $request->post($this, "/api/v1/pedidos", $pedido->toJSON());
            if ($this->debug)
                print $pedido->toJSON();
        } catch (\Exception $e) {

            $error = new BaseResponse();
            $error->mapperJson(json_decode($e->getMessage(), true));

            return $error;
        }
                
        $pedido_id = json_decode($response)->id;
        $save_plan = $this->ItenPedido($pedido_id, $iten);

        return $save_plan;
    }

    /**
     * @param integer $pedidoID
     * @param array $iten 
     * @return mixed iten_pedido_id
     */
    public function ItenPedido($pedidoID, $iten)
    {
        try {
            $url_path = "/api/v1/pedidos/". (int)$pedidoID ."/itens";
            $request = new Request($this);
            $response = $request->post($this, $url_path, $iten->toJSON());
            if ($this->debug)
                print $iten->toJSON();
        } catch (\Exception $e) {

            $error = new BaseResponse();
            $error->mapperJson(json_decode($e->getMessage(), true));

            return $error;
        }
        
        return $response;
    }

}

