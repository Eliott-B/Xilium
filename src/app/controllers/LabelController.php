<?php

namespace app\controllers;

use app\models\Label;

class LabelController
{


    public function list_labels()
    {
        $labels = new Label();
        $labels = $labels->all();

        var_dump($labels);
    }

    public function show_label($id)
    {
        $label = new Label();
        $label = $label->find($id);

        var_dump($label);
    }

    public function delete($id)
    {
        $label = new Label();
        $label = $label->delete($id);

        var_dump($label);
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
        $label = new Label();
        $label->create(['name' => $_POST['name']]);
    }

    public function update_form($id){
        $label = new Label();
        $label = $label->find($id);
        echo "
        <form action='' method='post'>
            <input type='hidden' name='id' value='$id'>
            <label for='name'>Nom</label>
            <input type='text' name='name' id='name' value='" . $label['lab_name'] . "'>
            <input type='submit' value='Ajouter'>
        </form>
        ";
    }

    public function update(){
        $label = new Label();
        $label = $label->find($_POST['id']);
        $label->update(['lab_name' => $_POST['name']]);
    }


}