<?php

namespace app\models;

class User extends Model
{
    protected string $table = 'users';
    protected array $fillable = [
        'username',
        'password',
        'name',
        'firstname',
        'role_id'
    ];
}