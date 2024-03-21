<?php

namespace app\models;
/**
 * Model représentant les logs
 */
class Log extends Model
{
    /**
     * Le nom de la table associée à ce modèle
     * @var string
     */
    protected string $table = 'logs';

    /**
     * Les attributs pouvant être remplis
     * @var array
     */
    protected array $fillable = [
        'log_ip',
        'log_date',
        'log_content',
        'ticket_id',
        'user_id'
    ];
}
