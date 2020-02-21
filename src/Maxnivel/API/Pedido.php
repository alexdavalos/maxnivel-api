<?php

namespace MaxNivel\API;


class Pedido implements \JsonSerializable
{

    /**
     * @var
     */
    private $cliente_id;
    private $tipo_id;
    private $pagamento_confirmado;
    private $pagamento_metodo_codigo;
    private $itens;
    private $endereco_pagador_id;
    private $endereco_entrega_id;

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * @return string
     */
    public function toJSON()
    {

        return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
    }

    /**
     * @param $name
     * @param $value
     * @return $this
     */
    function __set($name, $value)
    {
        $this->$name = $value;

        return $this;
    }


    public function setClienteId($cliente_id)
    {
        $this->cliente_id = $cliente_id;
        return $this;
    }

    public function getClienteId()
    {
        $this->cliente_id;
    }

    public function setTipoId($tipo_id)
    {
        $this->tipo_id = $tipo_id;
        return $this;
    }

    public function getTipoId()
    {
        $this->tipo_id;
    }

    public function setPagamentoConfirmado($pagamento_confirmado)
    {
        $this->pagamento_confirmado = $pagamento_confirmado;
        return $this;
    }

    public function getPagamentoConfirmado()
    {
        $this->pagamento_confirmado;
    }

    public function setPagamentoMetodoCodigo($pagamento_metodo_codigo)
    {
        $this->pagamento_metodo_codigo = $pagamento_metodo_codigo;
        return $this;
    }

    public function getPagamentoMetodoCodigo()
    {
        $this->pagamento_metodo_codigo;
    }

    public function setItens($itens)
    {
        $this->itens = $itens;
        return $this;
    }

    public function getItens()
    {
        $this->itens;
    }

    public function setEnderecoPagadorId($endereco_pagador_id)
    {
        $this->endereco_pagador_id = $endereco_pagador_id;
        return $this;
    }

    public function getEnderecoPagadorId()
    {
        $this->endereco_pagador_id;
    }


    public function setEnderecoEntregaId($endereco_entrega_id)
    {
        $this->endereco_entrega_id = $endereco_entrega_id;
        return $this;
    }

    public function getEnderecoEntregaId()
    {
        $this->endereco_entrega_id;
    }

    /**
     * @return BaseResponse
     */
    public function getPedidoAPI(MaxNivel $credentials, $query = [])
    {

        try {

            $data = [];

            if (!empty($query)) {
                $data = [
                    'query' => $query
                ];
            }

            $request = new Request($credentials);
            $response = $request->get($credentials, "/api/v1/pedidos", $data);
        } catch (\Exception $e) {

            $error = new BaseResponse();
            $error->mapperJson(json_decode($e->getMessage(), true));

            return $error;
        }

        //$distribuidor = new DistribuidorResponse();
        //$distribuidor->mapperJson($response["distribuidores"]);
        //return $distribuidor;

        return $response["pedidos"];
    }
}
