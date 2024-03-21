<?php

namespace app\models;

/**
 * Model représentant un ticket
 */
class Ticket extends Model
{
    /**
     * Le nom de la table associée à ce modèle
     * @var string
     */
    protected string $table = 'tickets';

    /**
     * Les attributs pouvant être remplis
     * @var array
     */
    protected array $fillable = [
        'tic_title',
        'tic_description',
        'author_id',
        'label_id',
        'category_id',
        'priority_id',
        'status_id',
        'updater_id',
        'tech_id',
        'creation_date',
        'update_date'
    ];
}