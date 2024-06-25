<?php

namespace app\models;

/**
 * Model représentant un status
 */
class Status extends Model
{
    /**
     * Le nom de la table associée à ce modèle
     * @var string
     */
    protected string $table = 'status';

    /**
     * Les attributs pouvant être remplis
     * @var array
     */
    protected array $fillable = [
        'sta_name',
        'sta_css_color'
    ];
}