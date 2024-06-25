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
}