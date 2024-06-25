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
        $categories = new Category();
        $categories = $categories->all();

        require 'views/adminweb_categories.php';

    }

    /**
     * Supprime une categorie
     * @param int $id identifiant de la category
     */
    public function delete($id)
    {
        $categories = new Category();
        $categories = $categories->delete($id);

        header('Location: /admin/categories');
    }

    /**
     * Affiche le formulaire pour la création d'une categorie
     */
    public function create_form()
    {
        require 'views/adminweb_categories_create.php';
    }

    /**
     * Crée une categorie grâce au formulaire
     */
    public function create()
    {
        $categories = new Category();
        $categories->create([
            'cat_name' => $_POST['cat_name'],
            'cat_css_color' => $_POST['cat_css_color']
        ]);

        header('Location: /admin/categories');
    }

    /**
     * Affiche le formulaire pour la modification d'une categorie
     */
    public function update_form($id){
        $category = new Category();
        $category = $category->find($id);
        require 'views/adminweb_categories_update.php';
    }

    /**
     * Modifie une categorie grâce au formulaire
     */
    public function update($id){
        $category = new Category();
        $category->find($id);
        $category->update([
            'cat_name' => $_POST['cat_name'],
            'cat_css_color' => $_POST['cat_css_color']
        ]);

        header('Location: /admin/categories');
    }
}