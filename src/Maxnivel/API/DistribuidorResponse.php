<?php

namespace MaxNivel\API;


/**
 * Class DistribuidorResponse
 * @package MaxNivel\API
 */
class DistribuidorResponse extends BaseResponse
{
    /**
     * @var
     */
    protected $id;
    protected $patrocinador_id;
    protected $cpf;
    protected $cnpj;
    protected $status;

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
    public function setDistribuidorId($distribuidor_id)
    {
        $this->id = $distribuidor_id;
    }

    /**
     * @return mixed
     */
    public function getPatrocinadorId()
    {
        return $this->patrocinador_id;
    }

    /**
     * @return mixed
     */
    public function setPatrocinadorId($patrocinador_id)
    {
        $this->id = $patrocinador_id;
    }

    /**
     * @return mixed
     */
    public function getCpfDistribuidor()
    {
        return $this->cpf;
    }

    /**
     * @return mixed
     */
    public function setCpfDistribuidor($cpf_distribuidor)
    {
        $this->cpf = $cpf_distribuidor;
    }

    /**
     * @return mixed
     */
    public function getCnpjDistribuidor()
    {
        return $this->cnpj;
    }

    /**
     * @return mixed
     */
    public function setCnpjDistribuidor($cnpj_distribuidor)
    {
        $this->cnpj = $cnpj_distribuidor;
    }

    /**
     * @return mixed
     */
    public function getStatusDistribuidor()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function setStatusDistribuidor($status_distribuidor)
    {
        $this->status = $status_distribuidor;
    }

}