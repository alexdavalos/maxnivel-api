<?php

namespace MaxNivel\API;


/**
 * Class BaseResponse
 * @package MaxNivel\API
 */
class BaseResponse implements \JsonSerializable
{
    
    //public $status;
    /**
     * @var
     */
    public $titulo;
    /**
     * @var
     */
    public $mensagem;
    /**
     * @var
     * 
     * appear in error response
     * in error object
     * ...
     * "error" => {'servico' : '', 'detalhes' : ''}
     * ...
     */
    public $servico;
    /**
     * @var
     * 
     * appear in error response
     * in error object
     * ...
     * "error" => {'servico' : '', 'detalhes' : ''}
     * ...
     */
    public $detalhes;
    /**
     * @var
     */
    public $status_code;
    /**
     * @var
     */
    public $responseJSON;

    public $status_label;

    public $result_status = true;

    /**
     * @var string 
     * appear like string for http code error > 500 
     */
    public $error;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * @return bool
     */
    public function getResultStatus()
    {
        return $this->result_status;

    }

    /**
     * @return mixed
     */

    public function getTituloError()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     * @return BaseResponse
     */
    public function setTituloError($titulo_error)
    {
        $this->titulo = $titulo_error;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->status_code;
    }

    /**
     * @param mixed $status_code
     * @return BaseResponse
     */
    public function setStatusCode($status_code)
    {
        $this->status_code = $status_code;

        return $this;
    }

    public function getServicoError()
    {
        return $this->servico;
    }

    public function setServicoError($servico_error)
    {
        $this->servico = $servico_error;
    }

    /**
     * @return mixed
     */
    public function getDetalhesError()
    {
        return $this->detalhes;
    }

    /**
     * @param mixed $detalhes
     * @return BaseResponse
     */
    public function setDetalhesError($detalhes_error)
    {
        $this->detalhes = $detalhes_error;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMensagemError()
    {
        return $this->mensagem . "\n";
    }

    /**
     * @param mixed $mensagem
     * @return BaseResponse
     */
    public function setMensagemError($mensagem_error)
    {
        $this->mensagem = $mensagem_error;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatusLabel()
    {
        /** 200 code, is not sended for the service api */
        if ($this->status_code == 200) {
            $this->status_label = "OK";
        } elseif ($this->status_code == 400) {
            $this->status_label = "BAD_REQUEST";
        } elseif ($this->status_code == 401) {
            $this->status_label = "UNAUTHORIZED";
        } elseif ($this->status_code == 404) {
            $this->status_label = "NOT_FOUND";
        } elseif ($this->status_code == 405) {
            $this->status_label = "METHOD_NOT_ALLOWED";
        } elseif ($this->status_code == 412) {
            $this->status_label = "PRECONDITION_FAILED";
        } elseif ($this->status_code == 422) {
            $this->status_label = "UNPROCESSABLE";
        } elseif ($this->status_code == 500) {
            $this->status_label = "INTERNAL_SERVER_ERROR";
        } elseif ($this->status_code == 501) {
            $this->status_label = "NOT_IMPLEMENTED";
        } 
        return $this->status_label;
    }

    /**
     * @param mixed $status
     */
    /* public function getStatus($status)
    {
        return $this->status;
    } */

    /**
     * @param mixed $status
     */
    /* public function setStatus($status)
    {
        $this->status = $status;
    } */


    /**
     * @param $json
     * @return $this
     */
    public function mapperJson($json)
    {
        /** object original response  */
        $this->setResponseJSON($json);

        /** service api send result NULL on the response request. In this cases, the services send a html template for redirect on own website   */
        if(!is_array($json) || is_null($json) || empty($json)){
            $this->status_code = 500;
            $this->result_status = false;
            return $this;            
        }

        /** for OK response whit multiples items or array responses  */
        if(!isset($json['error']) && count($json) > 1){
            return $this;
        }

        /** for single object response  */
        array_walk_recursive($json, function ($value, $key) {

            if (property_exists($this, $key)) {
                $this->$key = $value;
            }

            if (isset($this->status_code) && $this->status_code >= '400'){
                $this->result_status = false;
            }
        });

        //$this->setResponseJSON($json);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getResponseJSON()
    {
        return $this->responseJSON;
    }

    /**
     * @param mixed $array
     */
    public function setResponseJSON($array)
    {
        $this->responseJSON = json_encode($array, JSON_PRETTY_PRINT);
    }
}