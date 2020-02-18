<?php

namespace MaxNivel\API;


/**
 * Class Exception
 * @package MaxNivel\API
 */
class Exception extends \ErrorException
{
    // custom string representation of object
    /**
     * @return string
     */
    public function __toString()
    {
        return "[{$this->code}]: {$this->message}\n";
    }
}
