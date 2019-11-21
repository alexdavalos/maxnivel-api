<?php

namespace MaxNivel\API;


class PedidoIten implements \JsonSerializable
{
    /**
     * @var
     */
    //private $pedido_id;
    private $produto_id;
    private $quantidade;
    private $valor_unitario;
    private $taxa;


    /**
     * Pedido constructor.
     * @param $pedido_id
     */
    /* public function __construct($pedido_id)
    {
        $this->pedido_id = $pedido_id;
    } */


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

    /**
     * @return mixed
     */
    /* public function getPedidoId()
    {
        return $this->pedido_id;
    } */

    /**
     * @param mixed $pedido_id
     * @return pedido_iten
     */
    /* public function setPedidoId($pedido_id)
    {
        $this->pedido_id = $pedido_id;

        return $this;
    } */

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->produto_id;
    }

    /**
     * @param mixed $produto_id
     * @return pedido_iten
     */
    public function setProductId($produto_id)
    {
        $this->produto_id = $produto_id;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param mixed $produto_id
     * @return pedido_iten
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getValorUnitario()
    {
        return $this->valor_unitario;
    }

    /**
     * @param mixed $produto_id
     * @return pedido_iten
     */
    public function setValorUnitario($valor_unitario)
    {
        $this->valor_unitario = $valor_unitario;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getTaxa()
    {
        return $this->taxa;
    }

    /**
     * @param mixed $produto_id
     * @return pedido_iten
     */
    public function setTaxa($taxa)
    {
        $this->taxa = $taxa;

        return $this;
    }
}
