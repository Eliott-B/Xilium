<?php

namespace app\models;

class Comment extends Model
{
    protected string $table = 'comments';
    protected array $fillable = [
        'com_title',
        'com_comment',
        'com_date',   // À voir si obligatoire, car défaut dans BDD
        'ticket_id',
        'user_id',
        'reply_to'
    ];
}