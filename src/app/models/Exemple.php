<?php

namespace app\models;

class Exemple
{
    public string $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function update(){
        // met à jour ce model dans la bdd
    }

}