<?php

namespace app\models;

class Status extends Model
{
    protected string $table = 'status';
    protected array $fillable = [
        'name'
    ];
}