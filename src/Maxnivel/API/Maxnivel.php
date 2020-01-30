<?php

namespace MaxNivel\API;

use function GuzzleHttp\json_decode;

class MaxNivel
{
    /**
     * @var bool
     */
    public $debug = false;
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
     * @param Cliente $cliente
     * @return mixed
     */
    public function CadastrarCliente(Cliente $cliente)
    {
        $response = "";

        try {
            $request = new Request($this);
            $response = $request->post($this, "/api/v1/clientes", $cliente->toJSON());
            if ($this->debug)
                print $cliente->toJSON();
        } catch (\Exception $e) {

            $error = new BaseResponse();
            $error->mapperJson(json_decode($e->getMessage(), true));

            return $error;
        }

        $cliente = new BaseResponse();
        $cliente->mapperJson($response);
        return $cliente;
    }

    /**
     * @return BaseResponse|ClienteResponse
     */
    public function Clientes(Cliente $data)
    {
        $response = "";

        try {
            $request = new Request($this);
            $response = $request->get($this, "/api/v1/clientes", $data->toJSON());
            if ($this->debug)
                print $data->toJSON();
        } catch (\Exception $e) {

            $error = new BaseResponse();
            $error->mapperJson(json_decode($e->getMessage(), true));

            return $error;
        }

        $cliente = new BaseResponse();
        $cliente->mapperJson($response);
        return $cliente;
    }

    /**
     * @param Pedido $pedido
     * @return mixed
     */
    public function EnviarPedido(Pedido $pedido)
    {
        $response = "";

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

        $pedido = new BaseResponse();
        $pedido->mapperJson($response);
        return $pedido;
    }
}
