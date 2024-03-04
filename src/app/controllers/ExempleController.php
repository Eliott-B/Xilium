<?php

namespace app\controllers;

use app\models\Exemple;

class ExempleController
{
    public function bonjour($id){

//        require "views/test.php";
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
        if(isset($_POST['nom'])){
            $exemple = new Exemple();
        }

        header('Location: /bonjour');
    }
}