<?php

namespace app\models;

class Label extends Model
{
    protected string $table = 'labels';
    protected array $fillable = [
        'name'
    ];
}