<?php

namespace app\models;

class Label extends Model
{
    protected string $table = 'labels';
    protected array $fillable = [
        'lab_name'
    ];

//    public function __construct()
//    {
//        parent::__construct();
//    }
}