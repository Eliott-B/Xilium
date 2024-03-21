<?php

namespace app\models;

/**
 * Model représentant un status
 */
class Status extends Model
{
    /**
     * Le nom de la table associée à ce modèle
     * @var string
     */
    protected string $table = 'status';

    /**
     * Les attributs pouvant être remplis
     * @var array
     */
    protected array $fillable = [
        'sta_name',
        'sta_css_color'
    ];

    /**
     * Récupère un status à partir de son id
     * @param int $id L'id du status à récupérer
     * @return array Les données du status récupéré
     */
    public function get_status($id)
    {
        $status = new Status();
        $status = $status->custom("select * from status where sta_id = :id", ['id' => $id]);
        return $status[0];
    }
}