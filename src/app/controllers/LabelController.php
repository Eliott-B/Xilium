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
    public function list()
    {
        $labels = new Label();
        $labels = $labels->all();

        require 'views/adminweb_labels.php';
    }

    /**
     * Supprime un label
     * @param int $id identifiant du label
     */
    public function delete($id)
    {
        $label = new Label();
        $label = $label->delete($id);

        header('Location: /admin/labels/list');
    }

    /**
     * Affiche le formulaire pour la création d'un label
     */
    public function create_form()
    {
        // TODO : require la vue
    }

    /**
     * Crée un label grâce au formulaire
     */
    public function create()
    {
        $label = new Label();
        $label->create([
            'lab_name' => $_POST['name'],
            'lab_css_color' => $_POST['color']
        ]);

        header('Location: /admin/labels/list');
    }

    /**
     * Affiche le formulaire pour la modification d'un label
     */
    public function update_form($id){
        $label = new Label();
        $label = $label->find($id);
        // todo : require la vue
    }

    /**
     * Modifie un label grâce au formulaire
     */
    public function update(){
        $label = new Label();
        $label->find($_POST['id']);
        $label->update([
            'lab_name' => $_POST['name'],
            'lab_css_color' => $_POST['color']
        ]);

        header('Location: /admin/labels/list');
    }
}