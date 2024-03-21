<?php

namespace app\models;
/**
 * Model représentant un user
 */
class User extends Model
{
    /**
     * Le nom de la table associée à ce modèle
     * @var string
     */
    protected string $table = 'users';

    /**
     * Les attributs pouvant être remplis
     * @var array
     */
    protected array $fillable = [
        'use_username',
        'use_password',
        'use_name',
        'use_firstname',
        'role_id'
    ];
}