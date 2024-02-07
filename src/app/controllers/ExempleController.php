<?php

namespace app\controllers;

class ExempleController
{
    public function bonjour(){
        echo "Bonjour";
    }

    public function form(){
        echo "
        <form action='' method='post'>
        <input type='text' name='nom' id='nom'>
        <input type='submit'>
        </form>
        ";
    }

    public function update(){
        print_r($_POST);
    }
}