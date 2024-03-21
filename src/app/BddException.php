<?php

namespace app;

class BddException extends \Exception
{

    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}