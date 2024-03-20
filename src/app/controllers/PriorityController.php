<?php

namespace app\controllers;

use app\models\Priority;

/**
 * Module du controleur des priorités
 */
class PriorityController
{
    /**
     * Liste les priorités
     */
    public function list_priorities()
    {
        $priorities = new Priority();
        $priorities = $priorities->all();

        var_dump($priorities);
    }

    /**
     * Affiche une priorité
     * @param int $id identifiant de la priorité
     */
    public function show_priority($id)
    {
        $priority = new Log();
        $priority = $priority->find($id);

        var_dump($priority);
    }

    /**
     * Supprime une priorité
     * @param int $id identifiant de la priorité
     */
    public function delete($id)
    {
        $priority = new Priority();
        $priority = $priority->delete($id);

        var_dump($priority);
    }

    /**
     * Affiche le formulaire pour la création d'une priorité
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
     * Crée une priorité à partir des données du formulaire
     */
    public function create()
    {
        $priority = new Priority();
        $priority->create(['name' => $_POST['name']]);
    }

    /**
     * Affiche le formulaire de modification d'une priorité
     * @param int $id identifiant de la priorité
     */
    public function update_form($id){
        $priority = new Priority();
        $priority = $priority->find($id);
        echo "
        <form action='./' method='post'>
            <input type='hidden' name='id' value='$id'>
            <label for='name'>Nom</label>
            <input type='text' name='name' id='name' value='" . $priority['pri_name'] . "'>
            <input type='submit' value='Ajouter'>
        </form>
        ";
    }

    /**
     * Modifie une priorité à partir des données du formulaire
     */
    public function update(){
        $priority = new Priority();
        $priority = $priority->find($_POST['id']);
        var_dump($priority);
        $priority->update(['pri_name' => $_POST['name']]);
    }
}