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
     * Récupère une catégorie à partir de son identifiant
     * @param $id
     * @return array Les données de la catégorie récupérée
     */
    public function get_category($id)
    {
        $category = new Category();
        $category = $category->custom("select * from categories where cat_id = :id", ['id' => $id]);
        return $category[0];
    }

    /**
     * Supprime une catégorie à partir de son id
     * sauf si le nom de la catégorie est 'Autre'
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $categoryToDelete = $this->get_category($id);

        if ($categoryToDelete !== null) {
            if ($categoryToDelete['cat_name'] == 'Autre') {
                return false;
            } else {
                parent::delete($id);
                return true;
            }
        }

        return false;
    }

    /**
     * Créé une catégorie à partir de ses args
     * sauf si les entrés ne sont pas bonnes
     * @param array $args
     * @return bool
     */
    public function create(array $args)
    {
        if (gettype($args['cat_name']) != "string" ||
            ($args['cat_css_color'] != null && gettype($args['cat_css_color']) != "string")) {
            return false;
        } else {
            parent::create($args);
            return true;
        }
    }
}