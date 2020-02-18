<?php

namespace MaxNivel\API;


/**
 * Class Cliente
 * @package MaxNivel\API
 */
class Cliente implements \JsonSerializable
{

    /**
     * @var
     */
    private $tipo_cliente = 'distribuidor';
    private $nome;
    private $sobrenome;
    private $email;
    private $senha = "ABC@abc#123";
    private $patrocinador_id;
    private $cpf;
    private $data_nascimento;
    private $tipo_pessoa_id = 1;
    private $estado_civil_id = 5;
    private $cidade_id = "2571";
    private $cep = "38081470";
    private $logradouro = "Avenida Francisco José de Carvalho";
    private $numero = "430";
    private $bairro = "Parque do Mirante";
    private $complemento;
    private $usuario;
    private $senha_financeira = "ABC@abc#123";
    private $telefones;


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $vars = get_object_vars($this);
        $vars_clear = array_filter($vars, function ($value) {
            return null !== $value;
        });

        return $vars_clear;
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
    public function getTipoCliente()
    {
        return $this->tipo_cliente;
    }

    /**
     * @return mixed
     */
    public function setTipoCliente($tipo_cliente)
    {
        $this->tipo_cliente = $tipo_cliente;
    }

    /**
     * @return mixed
     */
    public function getNomeCliente()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function setNomeCliente($nome_cliente)
    {
        $this->nome = $nome_cliente;
    }


    /**
     * @return mixed
     */
    public function getSobreNomeCliente()
    {
        return $this->sobrenome;
    }

    /**
     * @return mixed
     */
    public function setSobreNomeCliente($sobrenome_cliente)
    {
        $this->sobrenome = $sobrenome_cliente;
    }

    /**
     * @return mixed
     */
    public function getEmailCliente()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function setEmailCliente($email_cliente)
    {
        $this->email = $email_cliente;
    }

    /**
     * @return mixed
     */
    public function getSenhaCliente()
    {
        return $this->senha;
    }

    /**
     * @return mixed
     */
    public function setSenhaCliente($senha_cliente)
    {
        $this->senha = $senha_cliente;
    }


    /**
     * @return mixed
     */
    public function getPatrocinadorIDCliente()
    {
        return $this->patrocinador_id;
    }

    /**
     * @return mixed
     */
    public function setPatrocinadorIDCliente($patrocinador_id_cliente)
    {
        $this->patrocinador_id = $patrocinador_id_cliente;
    }

    /**
     * @return mixed
     */
    public function getCpfCliente()
    {
        return $this->cpf;
    }

    /**
     * @return mixed
     */
    public function setCpfCliente($cpf_cliente)
    {
        $this->cpf = $cpf_cliente;
    }

    /**
     * @return mixed
     */
    public function getDataNacimentoCliente()
    {
        return $this->data_nascimento;
    }

    /**
     * @return mixed
     */
    public function setDataNacimentoCliente($data_nacimento_cliente)
    {
        $this->data_nascimento = $data_nacimento_cliente;
    }

    /**
     * @return mixed
     */
    public function getTipoPessoaIDCliente()
    {
        return $this->tipo_pessoa_id;
    }

    /**
     * @return mixed
     */
    public function setTipoPessoaIDCliente($tipo_pessoa_id_cliente)
    {
        $this->tipo_pessoa_id = $tipo_pessoa_id_cliente;
    }

    /**
     * @return mixed
     */
    public function getEstadoCivilIDCliente()
    {
        return $this->estado_civil_id;
    }

    /**
     * @return mixed
     */
    public function setEstadoCivilIDCliente($estado_civil_id_cliente)
    {
        $this->estado_civil_id = $estado_civil_id_cliente;
    }

    /**
     * @return mixed
     */
    public function getCidadeIDCliente()
    {
        return $this->cidade_id;
    }

    /**
     * @return mixed
     */
    public function setCidadeIDCliente($cidade_id_cliente)
    {
        $this->cidade_id = $cidade_id_cliente;
    }

    /**
     * @return mixed
     */
    public function getCepCliente()
    {
        return $this->cep;
    }

    /**
     * @return mixed
     */
    public function setCepCliente($cep_cliente)
    {
        $this->cep = $cep_cliente;
    }

    /**
     * @return mixed
     */
    public function getLograduroCliente()
    {
        return $this->logradouro;
    }

    /**
     * @return mixed
     */
    public function setLograduroCliente($logradouro_cliente)
    {
        $this->logradouro = $logradouro_cliente;
    }

    /**
     * @return mixed
     */
    public function getNumeroCliente()
    {
        return $this->numero;
    }

    /**
     * @return mixed
     */
    public function setNumeroCliente($numero_cliente)
    {
        $this->numero = $numero_cliente;
    }

    /**
     * @return mixed
     */
    public function getBairroCliente()
    {
        return $this->bairro;
    }

    /**
     * @return mixed
     */
    public function setBairroCliente($bairro_cliente)
    {
        $this->bairro = $bairro_cliente;
    }

    /**
     * @return mixed
     */
    public function getComplementoCliente()
    {
        return $this->complemento;
    }

    /**
     * @return mixed
     */
    public function setCompletoCliente($complemento_cliente)
    {
        $this->complemento = $complemento_cliente;
    }

    /**
     * @return mixed
     */
    public function getUsuarioCliente()
    {
        return $this->usuario;
    }

    /**
     * @return mixed
     */
    public function setUsuarioCliente($usuario_cliente)
    {
        $this->usuario = $usuario_cliente;
    }

    /**
     * @return mixed
     */
    public function getSenhaFinancieraCliente()
    {
        return $this->senha_financeira;
    }

    /**
     * @return mixed
     */
    public function setSenhaFinancieraCliente($senha_financeira)
    {
        $this->senha_financeira = $senha_financeira;
    }

    /**
     * @return mixed
     */
    public function getTelefonesCliente()
    {
        return $this->telefones;
    }

    /**
     * @return mixed
     */
    public function setTelefoneCliente($telefones_cliente)
    {
        $this->telefones = $telefones_cliente;
    }
}
