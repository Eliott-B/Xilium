<?php

namespace app\models;
/**
 * Model représentant les commentaires
 */
class Comment extends Model
{
    /**
     * Le nom de la table associée à ce modèle
     * @var string
     */
    protected string $table = 'comments';

    /**
     * Les attributs pouvant être remplis
     * @var array
     */
    protected array $fillable = [
        'com_title',
        'com_comment',
        'com_date',   // À voir si obligatoire, car défaut dans BDD
        'ticket_id',
        'user_id',
        'reply_to'
    ];
}