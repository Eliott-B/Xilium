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
}