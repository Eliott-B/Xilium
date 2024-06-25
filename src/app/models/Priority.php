<?php

namespace app\models;

/**
 * Model représentant une priorité
 */
class Priority extends Model
{
    /**
     * Le nom de la table associée à ce modèle
     * @var string
     */
    protected string $table = 'priorities';

    /**
     * Les attributs pouvant être remplis
     * @var array
     */
    protected array $fillable = [
        'pri_name',
        'pri_index',
        'pri_css_color'
    ];
}