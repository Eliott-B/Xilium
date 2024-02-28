<?php

namespace app\models;

class Ticket extends Model
{
    protected string $table = 'tickets';
    protected array $fillable = [
        'tic_title',
        'tic_description',
        'author_id',
        'label_id',
        'priority_id',
        'status_id',
        'category_id',
        'updater_id',
        'tech_id',
        'creation_date',
        'update_date'
    ];
}