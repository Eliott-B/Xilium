<?php

namespace app\controllers;

use app\models\Role;

/**
 * Module du controleur des roles
 */
class RoleController
{
    /**
     * Liste les roles
     */
    public function list_roles()
    {
        $roles = new Role();
        $roles = $roles->all();

        var_dump($roles);
    }

    /**
     * Affiche un role
     * @param int $id identifiant du role
     */
    public function show_role($id)
    {
        $role = new Role();
        $role = $role->find($id);

        var_dump($role);
    }

    /**
     * Supprime un role
     * @param int $id identifiant du role
     */
    public function delete($id)
    {
        $role = new Role();
        $role = $role->delete($id);

        var_dump($role);
    }

    /**
     * Affiche le formulaire pour la création d'un role
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
     * Crée un role à partir du formulaire
     */
    public function create()
    {
        $role = new Role();
        $role->create(['name' => $_POST['name']]);
    }

    /**
     * Affiche le formulaire pour la modification d'un role
     */
    public function update_form($id){
        $role = new Role();
        $role = $role->find($id);
        echo "
        <form action='./' method='post'>
            <input type='hidden' name='id' value='$id'>
            <label for='name'>Nom</label>
            <input type='text' name='name' id='name' value='" . $role['rol_name'] . "'>
            <input type='submit' value='Ajouter'>
        </form>
        ";
    }

    /**
     * Modifie un role à partir du formulaire
     */
    public function update(){
        $role = new Role();
        $role = $role->find($_POST['id']);
        var_dump($role);
        $role->update(['rol_name' => $_POST['name']]);
    }
}