<?php

namespace app\models;
/**
 * Model représentant la catégorie
 */
class Category extends Model
{
    /**
     * Le nom de la table associée à ce modèle
     * @var string
     */
    protected string $table = 'categories';

    /**
     * Les attributs pouvant être remplis
     * @var array
     */
    protected array $fillable = [
        'cat_name',
        'cat_css_color'
    ];

    /**
     * Supprime une catégorie à partir de son id
     * sauf si le nom de la catégorie est 'Autre'
     * @param $id
     * @return null
     */
    public function delete($id)
    {
        $categoryToDelete = $this->find($id);

        if ($categoryToDelete !== null) {
            if ($categoryToDelete['cat_name'] == 'Autre') {
                return false;
            } else {
                parent::delete($id);
                return true;
            }
        }
    }
}