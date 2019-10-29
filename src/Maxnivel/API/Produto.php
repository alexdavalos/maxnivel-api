<?php

namespace MaxNivel\API;

/**
 * Class Produto
 * @package MaxNivel\API
 */
class Produto implements \JsonSerializable
{

    /**
     * @return array
     */
    public function jsonSerialize()
    {

        $vars = get_object_vars ($this);
        $vars_clear = array_filter ($vars, function ( $value ) {
            return null !== $value;
        });

        return $vars_clear;
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
     * @return BaseResponse|ProdutoResponse
     */
    public function getProdutoAPI(MaxNivel $credentials, $query = [])
    {
        
        try{

            $data = [];

            if(!empty($query)){
                $data = [
                    'query' => $query
                ];
            }

            $request = new Request($credentials);
            $response = $request->get($credentials, "/api/v1/produtos", $data);

        } catch (\Exception $e) {

            $error = new BaseResponse();
            $error->mapperJson(json_decode($e->getMessage(), true));

            return $error;
        }
    
        $produto = new ProdutoResponse();
        $produto->mapperJson($response["produtos"]);
        return $produto;

    }

}