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
    protected $nome;
    protected $email;
    protected $telefone;
    protected $status;



    /**
     * @param mixed $setClienteId
     * @return Cliente
     */
    public function setClienteId($cliente_id)
    {
        $this->id = $cliente_id;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getClienteId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return Customer
     */
    public function setEmail($cliente_email)
    {
        $this->email = (string) $cliente_email;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $first_name
     * @return Customer
     */
    public function setNome($cliente_nome)
    {
        $this->first_name = (string) $cliente_nome;
    }


    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }


    public function setTelefone($cliente_telefone)
    {
        $this->telefone = (string) $cliente_telefone;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }


    public function setStatus($cliente_status)
    {
        $this->status = (string) $cliente_status;
    }
}
