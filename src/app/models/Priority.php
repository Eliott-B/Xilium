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
}