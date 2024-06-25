<?php

namespace app\models;
/**
 * Model représentant un role
 */
class Role extends Model
{
    /**
     * Le nom de la table associée à ce modèle
     * @var string
     */
    protected string $table = 'roles';

    /**
     * Les attributs pouvant être remplis
     * @var array
     */
    protected array $fillable = [
        'rol_name'
    ];

    /**
     * Récupère le role d'un utilisateur
     * @param int $id
     * @return int
     */
    public static function getRoleIdByUserId(int $id): int
    {
        $role = new Role();
        $role=$role->custom("SELECT * FROM roles WHERE rol_id = (SELECT role_id FROM users WHERE use_id = :id)", ['id' => $id]);
        return intval($role[0]['rol_id']);
    }

    /**
     * Créé un role à partir de ses args
     * sauf si les entrés ne sont pas bonnes
     * @param array $args
     * @return bool
     */
    public function create(array $args)
    {
        if (gettype($args['rol_name']) != "string") {
            return false;
        } else {
            parent::create($args);
            return true;
        }
    }
}