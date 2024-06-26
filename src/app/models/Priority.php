<?php

namespace app\models;

/**
 * Model représentant une priorité
 */
class Priority extends Model
{
    /**
     * Le nom de la table associée à ce modèle
     * @var string
     */
    protected string $table = 'priorities';

    /**
     * Les attributs pouvant être remplis
     * @var array
     */
    protected array $fillable = [
        'pri_name',
        'pri_index',
        'pri_css_color'
    ];

    /**
     * Récupère une priorité à partir de son id
     * @param int $id L'id de la priorité à récupérer
     * @return array | null Les données de la priorité récupérée
     */
    public function get_priority($id)
    {
        $priority = new Priority();
        $priority = $priority->custom("select * from priorities where pri_id = :id", ['id' => $id]);
        if (empty($priority)) {
            return null;
        }
        return $priority[0];
    }

    /**
     * Créé une priorité à partir de ses args
     * sauf si les entrés ne sont pas bonnes
     * @param array $args
     * @return bool
     */
    public function create(array $args)
    {
        if (gettype($args['pri_name']) != "string" ||
            gettype($args['pri_index']) != "integer" ||
            ($args['pri_css_color'] != null && gettype($args['pri_css_color']) != "string")) {
            return false;
        } else {
            parent::create($args);
            return true;
        }
    }
}