<?php

namespace MaxNivel\API;


class Pedido implements \JsonSerializable
{

    /**
     * @var
     */
    private $pagamento_confirmado;
    /**
     * @var
     */
    private $distribuidor_comprador_id;
    /**
     * @var
     */
    private $e_ativacao;
    private $distribuidor_indicador_id;
    private $loja_id;
    private $cliente_id;
    private $tipo_id;
    private $cliente_nome;
    private $cliente_sobrenome;
    private $cliente_email;
    private $cliente_telefone;
    private $necessita_frete;
    private $data_pagamento;
    private $cliente_logradouro;
    private $cliente_bairro;
    private $cliente_cep;
    private $cliente_uf;
    private $entrega_nome;
    private $entrega_sobrenome;
    private $entrega_logradouro;
    private $entrega_bairro;
    private $entrega_cep;
    private $entrega_uf;
    private $valor_total;
    private $status_id;
    private $moeda_codigo;
    private $data_adicionado;
    private $data_modificado;
    private $cliente_rg;
    private $cliente_cpf;
    private $cliente_cnpj;
    private $cliente_ie;
    private $cliente_cidade;
    private $entrega_cidade;
    private $entrega_numero;
    private $cliente_numero;
    private $entrega_complemento;
    private $cliente_complemento;
    private $entrega_transportadora_codigo;
    private $pagamento_metodo_codigo;
    private $itens;
    private $endereco_id;
    private $patrocinador_id;


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

    public function setDistribuidorCompradorId($distribuidor_comprador_id)
    {
        $this->distribuidor_comprador_id = $distribuidor_comprador_id;
        return $this;
    }

    public function getDistribuidorCompradorId()
    {
        $this->distribuidor_comprador_id;
    }


    public function setDistribuidorIndicadorId($distribuidor_indicador_id)
    {
        $this->distribuidor_indicador_id = $distribuidor_indicador_id;
        return $this;
    }

    public function getDistribuidorIndicadorId()
    {
        $this->distribuidor_indicador_id;
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


    public function setEAtivacao($e_ativacao)
    {
        $this->e_ativacao = $e_ativacao;
        return $this;
    }

    public function getEAtivacao()
    {
        $this->e_ativacao;
    }

    public function setLojaId($loja_id)
    {
        $this->loja_id = $loja_id;
        return $this;
    }

    public function getLojaId()
    {
        $this->loja_id;
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

    public function setClienteNome($cliente_nome)
    {
        $this->cliente_nome = $cliente_nome;
        return $this;
    }

    public function getClienteNome()
    {
        $this->cliente_nome;
    }

    public function setClienteSobrenome($cliente_sobrenome)
    {
        $this->cliente_sobrenome = $cliente_sobrenome;
        return $this;
    }

    public function getClienteSobrenome()
    {
        $this->cliente_sobrenome;
    }

    public function setClienteEmail($cliente_email)
    {
        $this->cliente_email = $cliente_email;
        return $this;
    }

    public function getClienteEmail()
    {
        $this->cliente_email;
    }

    public function setClienteTelefone($cliente_telefone)
    {
        $this->cliente_telefone = $cliente_telefone;
        return $this;
    }

    public function getClienteTelefone()
    {
        $this->cliente_telefone;
    }

    public function setClienteRg($cliente_rg)
    {
        $this->cliente_rg = $cliente_rg;
        return $this;
    }

    public function getClienteRg()
    {
        $this->cliente_rg;
    }

    public function setClienteCpf($cliente_cpf)
    {
        $this->cliente_cpf = $cliente_cpf;
        return $this;
    }

    public function getClienteCpf()
    {
        $this->cliente_cpf;
    }

    public function setClienteCnpj($cliente_cnpj)
    {
        $this->cliente_cnpj = $cliente_cnpj;
        return $this;
    }

    public function getClienteCnpj()
    {
        $this->cliente_cnpj;
    }

    public function setClienteIe($cliente_ie)
    {
        $this->cliente_ie = $cliente_ie;
        return $this;
    }

    public function getClienteIe()
    {
        $this->cliente_ie;
    }

    public function setClienteCidade($cliente_cidade)
    {
        $this->cliente_cidade = $cliente_cidade;
        return $this;
    }

    public function getClienteCidade()
    {
        $this->cliente_cidade;
    }


    public function setClienteLogaduro($cliente_logradouro)
    {
        $this->cliente_logradouro = $cliente_logradouro;
        return $this;
    }

    public function getClienteLogaduro()
    {
        $this->cliente_logradouro;
    }

    public function setClienteBairro($cliente_bairro)
    {
        $this->cliente_bairro = $cliente_bairro;
        return $this;
    }

    public function getClienteBairro()
    {
        $this->cliente_bairro;
    }

    public function setClienteCep($cliente_cep)
    {
        $this->cliente_cep = $cliente_cep;
        return $this;
    }

    public function getClienteCep()
    {
        $this->cliente_cep;
    }

    public function setClienteUf($cliente_uf)
    {
        $this->cliente_uf = $cliente_uf;
        return $this;
    }

    public function getClienteUf()
    {
        $this->cliente_uf;
    }

    public function setClienteNumero($cliente_numero)
    {
        $this->cliente_numero = $cliente_numero;
        return $this;
    }

    public function getClienteNumero()
    {
        $this->cliente_numero;
    }

    public function setClienteComplemento($cliente_complemento)
    {
        $this->cliente_complemento = $cliente_complemento;
        return $this;
    }

    public function getClienteComplemento()
    {
        $this->cliente_complemento;
    }


    public function setNecesitaFrete($necessita_frete)
    {
        $this->necessita_frete = $necessita_frete;
        return $this;
    }

    public function getNecesitaFrete()
    {
        $this->necessita_frete;
    }

    public function setEntregaNome($entrega_nome)
    {
        $this->entrega_nome = $entrega_nome;
        return $this;
    }

    public function getEntregaNome()
    {
        $this->entrega_nome;
    }


    public function setEntregaSobrenome($entrega_sobrenome)
    {
        $this->entrega_sobrenome = $entrega_sobrenome;
        return $this;
    }

    public function getEntregaSobrenome()
    {
        $this->entrega_sobrenome;
    }

    public function setEntregaLograduro($entrega_logradouro)
    {
        $this->entrega_logradouro = $entrega_logradouro;
        return $this;
    }

    public function getEntregaLograduro()
    {
        $this->entrega_logradouro;
    }

    public function setEntregaBairro($entrega_bairro)
    {
        $this->entrega_bairro = $entrega_bairro;
        return $this;
    }

    public function getEntregaBairro()
    {
        $this->entrega_bairro;
    }

    public function setEntregaCep($entrega_cep)
    {
        $this->entrega_cep = $entrega_cep;
        return $this;
    }

    public function getEntregaCep()
    {
        $this->entrega_cep;
    }

    public function setEntregaUf($entrega_uf)
    {
        $this->entrega_uf = $entrega_uf;
        return $this;
    }

    public function getEntregaUf()
    {
        $this->entrega_uf;
    }


    public function setEntregaCidade($entrega_cidade)
    {
        $this->entrega_cidade = $entrega_cidade;
        return $this;
    }

    public function getEntregaCidade()
    {
        $this->entrega_cidade;
    }

    public function setEntregaNumero($entrega_numero)
    {
        $this->entrega_numero = $entrega_numero;
        return $this;
    }

    public function getEntregaNumero()
    {
        $this->entrega_numero;
    }

    public function setEntregaComplemento($entrega_complemento)
    {
        $this->entrega_complemento = $entrega_complemento;
        return $this;
    }

    public function getEntregaComplemento()
    {
        $this->entrega_complemento;
    }

    public function setEntregaTransportadoraCodigo($entrega_transportadora_codigo)
    {
        $this->entrega_transportadora_codigo = $entrega_transportadora_codigo;
        return $this;
    }

    public function getEntregaTransportadoraCodigo()
    {
        $this->entrega_transportadora_codigo;
    }

    public function setDataPagamento($data_pagamento)
    {
        $this->data_pagamento = $data_pagamento;
        return $this;
    }

    public function getDataPagamento()
    {
        $this->data_pagamento;
    }

    public function setValorTotal($valor_total)
    {
        $this->valor_total = $valor_total;
        return $this;
    }

    public function getValorTotal()
    {
        $this->valor_total;
    }

    public function setStatusId($status_id)
    {
        $this->status_id = $status_id;
        return $this;
    }

    public function getStatusId()
    {
        $this->status_id;
    }

    public function setMoedaCodigo($moeda_codigo)
    {
        $this->moeda_codigo = $moeda_codigo;
        return $this;
    }

    public function getMoedaCodigo()
    {
        $this->moeda_codigo;
    }

    public function setDataAdicionado($data_adicionado)
    {
        $this->data_adicionado = $data_adicionado;
        return $this;
    }

    public function getDataAdiciondo()
    {
        $this->data_adicionado;
    }

    public function setDataModificado($data_modificado)
    {
        $this->data_modificado = $data_modificado;
        return $this;
    }

    public function getDataModificado()
    {
        $this->data_modificado;
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

    public function setEnderecoId($endereco_id)
    {
        $this->endereco_id = $endereco_id;
        return $this;
    }

    public function getEnderecoId()
    {
        $this->endereco_id;
    }


    public function setPatrocinadorId($patrocinador_id)
    {
        $this->patrocinador_id = $patrocinador_id;
        return $this;
    }

    public function getPatrocinadorId()
    {
        $this->patrocinador_id;
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
