<?php

namespace app\models;

class Role extends Model
{
    protected string $table = 'roles';
    protected array $fillable = [
        'name'
    ];
}