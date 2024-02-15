<?php

namespace app\models;

class Label extends Model
{
    private string $table = 'labels';
    private array $fillable = [
        'name'
    ];
}