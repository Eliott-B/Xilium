<?php

namespace app\controllers;

use app\models\Category;

/**
 * Module du controleur des categories
 */
class CategoryController
{
    /**
     * Liste les categories
     */
    public function list()
    {
        $category = new Category();
        $category = $category->all();

        // todo : require la vue
    }

    /**
     * Supprime une categorie
     * @param int $id identifiant de la category
     */
    public function delete($id)
    {
        $category = new Category();
        $category = $category->delete($id);

        header('Location: /admin/categories/list');
    }

    /**
     * Affiche le formulaire pour la création d'une categorie
     */
    public function create_form()
    {
        // TODO : require la vue
    }

    /**
     * Crée une categorie grâce au formulaire
     */
    public function create()
    {
        $category = new Category();
        $category->create([
            'cat_name' => $_POST['name'],
            'cat_css_color' => $_POST['color']
        ]);

        header('Location: /admin/categories/list');
    }

    /**
     * Affiche le formulaire pour la modification d'une categorie
     */
    public function update_form($id){
        $category = new Category();
        $category = $category->find($id);
        // todo : require la vue
    }

    /**
     * Modifie une categorie grâce au formulaire
     */
    public function update(){
        $category = new Category();
        $category->find($_POST['id']);
        $category->update([
            'cat_name' => $_POST['name'],
            'cat_css_color' => $_POST['color']
        ]);

        header('Location: /admin/categories/list');
    }
}