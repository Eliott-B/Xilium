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

    public function create(array $args){
        if (gettype($args['tic_title']) != "string") {
            throw new \Exception("Le titre du ticket doit être une chaine de caractère");
        }
        else if (gettype($args['tic_description']) != "string") {
            throw new \Exception("La description du ticket doit être une chaine de caractère");
        }
        else if (gettype($args['author_id']) != "integer") {
            throw new \Exception("L'auteur du ticket doit être un entier");
        }
        else if (gettype($args['label_id']) != "integer") {
            throw new \Exception("Le label du ticket doit être un entier");
        }
        else if (gettype($args['category_id']) != "integer") {
            throw new \Exception("La catégorie du ticket doit être un entier");
        }
        else if ($args['priority_id'] != null && gettype($args['priority_id']) != "integer") {
            throw new \Exception("La priorité du ticket doit être un entier");
        }
        else if (gettype($args['status_id']) != "integer") {
            throw new \Exception("Le statut du ticket doit être un entier");
        }
        else if (gettype($args['updater_id']) != "integer") {
            throw new \Exception("L'identifiant du modificateur du ticket doit être un entier");
        }
        else if (array_key_exists('tech_id', $args) && gettype($args['tech_id']) != "integer") {
            throw new \Exception("L'identifiant du technicien assigné au ticket doit être un entier");
        }
        // else if (array_key_exists('creation_date', $args) != null && gettype($args['creation_date']) != "timestamp") {
        //     throw new \Exception("La date de création du ticket doit être une date");
        // }
        // else if (array_key_exists('update_date', $args) != null && gettype($args['update_date']) != "timestamp") {
        //     throw new \Exception("La date de mise à jour du ticket doit être une date");
        // }
        else {
            parent::create($args);
        }
    }
}