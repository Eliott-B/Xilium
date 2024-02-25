<?php

namespace app\models;

class Log extends Model
{
    protected string $table = 'logs';
    protected array $fillable = [
        'log_ip',
        'log_date',
        'log_content',
        'ticket_id',
        'user_id'
    ];
}