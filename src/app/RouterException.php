<?php

namespace app;

class RouterException extends \Exception
{
    public function __construct(string $message, int $code = 404)
    {
        parent::__construct($message, $code);
        $this->code = $code;
    }

    public function redirect(){
        http_response_code($this->code);
    }
}