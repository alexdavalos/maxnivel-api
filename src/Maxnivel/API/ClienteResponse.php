<?php

namespace MaxNivel\API;


/**
 * Class ClienteResponse
 * @package MaxNivel\API
 */
class ClienteResponse extends BaseResponse
{
    /**
     * @var
     */
    protected $id;
    protected $endereco_id;
    protected $distribuidor_id;

    /**
     * @return mixed
     */
    public function getDistribuidorId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function setDistribuidorId($distribuidor_id_response)
    {
        $this->id = $distribuidor_id_response;
    }

    /**
     * @return mixed
     */
    public function getEnderecoId()
    {
        return $this->endereco_id;
    }

    /**
     * @return mixed
     */
    public function setEnderecoId($endereco_id_response)
    {
        $this->endereco_id = $endereco_id_response;
    }

    /**
     * @param mixed $setClienteId
     * @return Cliente
     */
    public function setClienteId($cliente_id_response)
    {
        $this->id = $cliente_id_response;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClienteId()
    {
        return $this->id;
    }
}
