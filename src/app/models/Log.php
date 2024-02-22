<?php

namespace app\models;

class Log extends Model
{
    protected string $table = 'logs';
    protected array $fillable = [
        'ip',
        'date',
        'content',
        'ticket_id',
        'user_id'
    ];
}