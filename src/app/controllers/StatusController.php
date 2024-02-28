<?php

namespace app\controllers;

use app\models\Status;

class StatusController
{


    public function list_status()
    {
        $status = new Status();
        $status = $status->all();

        var_dump($status);
    }

    public function show_status($id)
    {
        $status = new Status();
        $status = $status->find($id);

        var_dump($status);
    }

    public function delete($id)
    {
        $status = new Status();
        $status = $status->delete($id);

        var_dump($status);
    }

    public function create_form()
    {
        echo "
        <form action='' method='post'>
            <label for='name'>Nom</label>
            <input type='text' name='name' id='name'>
            <input type='submit' value='Ajouter'>
        </form>
        ";
    }

    public function create()
    {
        $status = new Status();
        $status->create(['name' => $_POST['name']]);
    }

    public function update_form($id){
        $status = new Status();
        $status = $status->find($id);
        echo "
        <form action='./' method='post'>
            <input type='hidden' name='id' value='$id'>
            <label for='name'>Nom</label>
            <input type='text' name='name' id='name' value='" . $status['sta_name'] . "'>
            <input type='submit' value='Ajouter'>
        </form>
        ";
    }

    public function update(){
        $status = new Status();
        $status = $status->find($_POST['id']);
        var_dump($status);
        $status->update(['sta_name' => $_POST['name']]);
    }


}