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
    protected $rg;
    protected $usuario; //sobrenome do cliente no pedido
    protected $nome;
    protected $nit;
    protected $ie;
    protected $razao_social;
    protected $nome_fantasia;
    protected $cidade;
    protected $bairro;
    protected $endereco;
    protected $complemento;
    protected $numero;
    protected $telefones;


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

    /**
     * @return mixed
     */
    public function getRgDistribuidor()
    {
        return $this->rg;
    }

    /**
     * @return mixed
     */
    public function setRgDistribuidor($rg_distribuidor)
    {
        $this->rg = $rg_distribuidor;
    }

    /**
     * @return mixed
     */
    public function getUsuarioDistribuidor()
    {
        return $this->usuario;
    }

    /**
     * @return mixed
     */
    public function setUsuarioDistribuidor($usuario_distribuidor)
    {
        $this->usuario = $usuario_distribuidor;
    }

    /**
     * @return mixed
     */
    public function getNomeDistribuidor()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function setNomeDistribuidor($nome_distribuidor)
    {
        $this->nome = $nome_distribuidor;
    }

    /**
     * @return mixed
     */
    public function getNitDistribuidor()
    {
        return $this->nit;
    }

    /**
     * @return mixed
     */
    public function setNitDistribuidor($nit_distribuidor)
    {
        $this->nit = $nit_distribuidor;
    }

    /**
     * @return mixed
     */
    public function getIeDistribuidor()
    {
        return $this->ie;
    }

    /**
     * @return mixed
     */
    public function setIeDistribuidor($ie_distribuidor)
    {
        $this->ie = $ie_distribuidor;
    }

    /**
     * @return mixed
     */
    public function getRazaoSocialDistribuidor()
    {
        return $this->razao_social;
    }

    /**
     * @return mixed
     */
    public function setRazaoSocialDistribuidor($razao_social_distribuidor)
    {
        $this->razao_social = $razao_social_distribuidor;
    }

    /**
     * @return mixed
     */
    public function getNomeFantasiaDistribuidor()
    {
        return $this->nome_fantasia;
    }

    /**
     * @return mixed
     */
    public function setNomeFantasiaDistribuidor($nome_fantasia_distribuidor)
    {
        $this->nome_fantasia = $nome_fantasia_distribuidor;
    }


    /**
     * @return mixed
     */
    public function getCidadeDistribuidor()
    {
        return $this->cidade;
    }

    /**
     * @return mixed
     */
    public function setCidadeDistribuidor($cidade_distribuidor)
    {
        $this->cidade = $cidade_distribuidor;
    }


    /**
     * @return mixed
     */
    public function getBairroDistribuidor()
    {
        return $this->bairro;
    }

    /**
     * @return mixed
     */
    public function setBairroDistribuidor($bairro_distribuidor)
    {
        $this->bairro = $bairro_distribuidor;
    }

    /**
     * @return mixed
     */
    public function getEnderecoDistribuidor()
    {
        return $this->endereco;
    }

    /**
     * @return mixed
     */
    public function setEnderecoDistribuidor($endereco_distribuidor)
    {
        $this->endereco = $endereco_distribuidor;
    }

    /**
     * @return mixed
     */
    public function getComplementoDistribuidor()
    {
        return $this->complemento;
    }

    /**
     * @return mixed
     */
    public function setCompletoDistribuidor($complemento_distribuidor)
    {
        $this->complemento = $complemento_distribuidor;
    }

    /**
     * @return mixed
     */
    public function getNumeroDistribuidor()
    {
        return $this->numero;
    }

    /**
     * @return mixed
     */
    public function setNumeroDistribuidor($numero_distribuidor)
    {
        $this->numero = $numero_distribuidor;
    }


    /**
     * @return mixed
     */
    public function getTelefonesDistribuidor()
    {
        return $this->telefones;
    }

    /**
     * @return mixed
     */
    public function setTeledonesDistribuidor($telefones_distribuidor)
    {
        $this->telefones = $telefones_distribuidor;
    }
}
