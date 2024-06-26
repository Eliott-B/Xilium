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

    /**
     * Supprime un label à partir de son id
     * sauf si le nom du label est 'Autre'
     * @param int $id l'id du label
     * @return bool
     */
    public function delete($id)
    {
        $labelToDelete = $this->get_label($id);

        if ($labelToDelete !== null) {
            if ($labelToDelete['lab_name'] == 'Autre') {
                return false;
            } else {
                parent::delete($id);
                return true;
            }
        }

        return false;
    }

    /**
     * Créé un label à partir de ses args
     * sauf si les entrés ne sont pas bonnes
     * @param array $args
     * @return bool
     */
    public function create(array $args)
    {
        if (gettype($args['lab_name']) != "string" ||
            ($args['lab_css_color'] != null && gettype($args['lab_css_color']) != "string")) {
            return false;
        } else {
            parent::create($args);
            return true;
        }
    }
}