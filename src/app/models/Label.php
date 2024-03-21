<?php

namespace app\models;
/**
 * Model représentant un label
 */
class Label extends Model
{
    /**
     * Le nom de la table associée à ce modèle
     * @var string
     */
    protected string $table = 'labels';

    /**
     * Les attributs pouvant être remplis
     * @var array
     */
    protected array $fillable = [
        'lab_name',
        'lab_css_color'
    ];

    /**
     * Récupère un label à partir de son id
     * @param int $id L'id du label à récupérer
     * @return array Les données du label récupéré
     */
    public function get_label($id)
    {
        $label = new Label();
        $label = $label->custom("select * from labels where lab_id = :id", ['id' => $id]);
        return $label[0];
    }
}