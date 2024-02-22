<?php

namespace app\models;

class User extends Model
{
    protected string $table = 'users';
    protected array $fillable = [
        'use_username',
        'use_password',
        'use_name',
        'use_firstname',
        'role_id'
    ];
}