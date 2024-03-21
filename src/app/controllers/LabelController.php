<?php

namespace app\controllers;

use app\models\Label;

/**
 * Module du controleur des labels
 */
class LabelController
{
    /**
     * Liste les labels
     */
    public function list_labels()
    {
        $labels = new Label();
        $labels = $labels->all();

        var_dump($labels);
    }

    /**
     * Affiche un label
     * @param int $id identifiant du label
     */
    public function show_label($id)
    {
        $label = new Label();
        $label = $label->find($id);

        var_dump($label);
    }

    /**
     * Supprime un label
     * @param int $id identifiant du label
     */
    public function delete($id)
    {
        $label = new Label();
        $label = $label->delete($id);

        var_dump($label);
    }

    /**
     * Affiche le formulaire pour la création d'un label
     */
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

    /**
     * Crée un label grâce au formulaire
     */
    public function create()
    {
        $label = new Label();
        $label->create(['lab_name' => $_POST['name']]);
    }

    /**
     * Affiche le formulaire pour la modification d'un label
     */
    public function update_form($id){
        $label = new Label();
        $label = $label->find($id);
        var_dump($label);
        echo "
        <form action='' method='post'>
            <input type='hidden' name='id' value='$id'>
            <label for='name'>Nom</label>
            <input type='text' name='name' id='name' value='" . $label['lab_name'] . "'>
            <input type='submit' value='Ajouter'>
        </form>
        ";
    }

    /**
     * Modifie un label grâce au formulaire
     */
    public function update(){
        $label = new Label();
        $label->find($_POST['id']);
        $label->update(['lab_name' => $_POST['name']]);
    }
}