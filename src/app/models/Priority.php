<?php

namespace app\models;

class Priority extends Model
{
    protected string $table = 'priorities';
    protected array $fillable = [
        'name',
        'index'
    ];
}