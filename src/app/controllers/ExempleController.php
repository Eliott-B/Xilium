<?php

namespace app\controllers;

use app\models\Exemple;

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
        if(isset($_POST['nom'])){
            $mon_exemple = new Exemple(htmlspecialchars($_POST['nom']));
            $mon_exemple->update();
        }

        header('Location: /bonjour');
    }
}