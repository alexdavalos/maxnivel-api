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


    public function getEAtivacao()
    {
        $this->e_ativacao;
    }

    public function getDistribuidorComprador()
    {
        $this->distribuidor_comprador_id;
    }

    public function getPagamentoConfirmado()
    {
        $this->pagamento_confirmado = $pagamento_confirmado;
    }


    public function setEAtivacao($e_ativacao)
    {
        $this->e_ativacao = $e_ativacao;
        return $this;
    }

    public function setDistribuidorComprador($distribuidor_comprador_id)
    {
        $this->distribuidor_comprador_id = $distribuidor_comprador_id;
        return $this;
    }

    public function setPagamentoConfirmado($pagamento_confirmado)
    {
        $this->pagamento_confirmado = $pagamento_confirmado;
        return $this;
    }


    /**
     * @return BaseResponse
     */
    public function getPedidoAPI(MaxNivel $credentials, $query = [])
    {
        
        try{

            $data = [];

            if(!empty($query)){
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