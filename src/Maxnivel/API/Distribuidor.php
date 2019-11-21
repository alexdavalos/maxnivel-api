<?php

namespace MaxNivel\API;

/**
 * Class Distribuidor
 * @package MaxNivel\API
 */
class Distribuidor implements \JsonSerializable
{

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
     * @return BaseResponse|DistribuidorResponse
     */
    public function getDistribuidorAPI(MaxNivel $credentials, $query = [])
    {

        try {

            $data = [];

            if (!empty($query)) {
                $data = [
                    'query' => $query
                ];
            }

            $request = new Request($credentials);
            $response = $request->get($credentials, "/api/v1/distribuidores", $data);
        } catch (\Exception $e) {

            $error = new BaseResponse();
            $error->mapperJson(json_decode($e->getMessage(), true));

            return $error;
        }

        $distribuidor = new DistribuidorResponse();
        $distribuidor->mapperJson($response["distribuidores"]);
        return $distribuidor;
    }
}
