<?php

namespace MaxNivel\API;


/**
 * Class ProdutoResponse
 * @package MaxNivel\API
 */
class ProdutoResponse extends BaseResponse
{
    /**
     * @var
     */
    protected $id;
    protected $preco;
    protected $e_plano;
    protected $e_upgrade_plano;
    protected $e_recompra_plano;
    protected $e_renovacao_plano;
    protected $e_ativacao;
    protected $upgrade_de_id;
    protected $upgrade_para_id;
    protected $renovacao_de_id;
    protected $status;
    protected $sku;
    protected $upc;
    protected $ean;
    protected $isbn;
    protected $nome;

    /**
     * @return mixed
     */
    public function getProdutoId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function setProdutoId($this_id)
    {
        $this->id = $this_id;
    }

    /**
     * @return mixed
     */
    public function getProdutoPreco()
    {
        return $this->preco;
    }

    /**
     * @return mixed
     */
    public function setProdutoPreco($this_preco)
    {
        $this->preco = $this_preco;
    }

    /**
     * @return mixed
     */
    public function getEPlano()
    {
        return $this->e_plano;
    }

    /**
     * @return mixed
     */
    public function setEPlano($this_e_plano)
    {
        $this->e_plano = $this_e_plano;
    }


    /**
     * @return mixed
     */
    public function getEUpgradePlano()
    {
        return $this->e_upgrade_plano;
    }

    /**
     * @return mixed
     */
    public function setEUpgradePlano($this_e_upgrade_plano)
    {
        $this->e_upgrade_plano = $this_e_upgrade_plano;
    }

    
    /**
     * @return mixed
     */
    public function getERecompraPlano()
    {
        return $this->e_recompra_plano;
    }

    /**
     * @return mixed
     */
    public function setERecompraPlano($this_e_recompra_plano)
    {
        $this->e_recompra_plano = $this_e_recompra_plano;
    }

    
    /**
     * @return mixed
     */
    public function getERenovacaoPlano()
    {
        return $this->e_renovacao_plano;
    }

    /**
     * @return mixed
     */
    public function setERenovacaoPlano($this_e_renovacao_plano)
    {
        $this->e_renovacao_plano = $this_e_renovacao_plano;
    }

    
    /**
     * @return mixed
     */
    public function getEAtivacaoPlano()
    {
        return $this->e_ativacao;
    }

    /**
     * @return mixed
     */
    public function setEAtivacaoPlano($this_e_ativacao)
    {
        $this->e_ativacao = $this_e_ativacao;
    }

    
    /**
     * @return mixed
     */
    public function getUpgradeDePlanoId()
    {
        return $this->upgrade_de_id;
    }

    /**
     * @return mixed
     */
    public function setUpgradeDePlanoId($this_upgrade_de_id)
    {
        $this->upgrade_de_id = $this_upgrade_de_id;
    }

    
    /**
     * @return mixed
     */
    public function getUpgradeParaPlanoId()
    {
        return $this->upgrade_para_id;
    }

    /**
     * @return mixed
     */
    public function setUpgradeParaPlanoId($this_upgrade_para_id)
    {
        $this->upgrade_para_id = $this_upgrade_para_id;
    }

    
    /**
     * @return mixed
     */
    public function getRenovacaoPlanoId()
    {
        return $this->renovacao_de_id;
    }

    /**
     * @return mixed
     */
    public function setRenovacaoPlanoId($this_renovacao_de_id)
    {
        $this->renovacao_de_id = $this_renovacao_de_id;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function setStatus($this_status)
    {
        $this->status = $this_status;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return mixed
     */
    public function setSku($this_sku)
    {
        $this->sku = $this_sku;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function setNome($this_nome)
    {
        $this->nome = $this_nome;
    }
    
}