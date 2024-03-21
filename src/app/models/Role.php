<?php

namespace app\models;
/**
 * Model représentant un role
 */
class Role extends Model
{
    /**
     * Le nom de la table associée à ce modèle
     * @var string
     */
    protected string $table = 'roles';

    /**
     * Les attributs pouvant être remplis
     * @var array
     */
    protected array $fillable = [
        'rol_name'
    ];
}