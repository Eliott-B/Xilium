<?php

namespace app\controllers;

use app\models\Status;

/**
 * Module du controleur des statuts
 */
class StatusController
{
    /**
     * Liste les statuts
     */
    public function list_status()
    {
        $status = new Status();
        $status = $status->all();

        var_dump($status);
    }

    /**
     * Affiche un statut
     * @param int $id identifiant du statut
     */
    public function show_status($id)
    {
        $status = new Status();
        $status = $status->find($id);

        var_dump($status);
    }

    /**
     * Supprime un statut
     * @param int $id identifiant du statut
     */
    public function delete($id)
    {
        $status = new Status();
        $status = $status->delete($id);

        var_dump($status);
    }

    /**
     * Affiche le formulaire pour la création d'un statut
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
     * Crée un statut à partir des données du formulaire
     */
    public function create()
    {
        $status = new Status();
        $status->create(['name' => $_POST['name']]);
    }

    /**
     * Affiche le formulaire pour la modification d'un statut
     * @param int $id identifiant du statut
     */
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

    /**
     * Modifie un statut à partir des données du formulaire
     */
    public function update(){
        $status = new Status();
        $status = $status->find($_POST['id']);
        var_dump($status);
        $status->update(['sta_name' => $_POST['name']]);
    }
}