<?php

namespace app\models;

class Label extends Model
{
    protected string $table = 'labels';
    protected array $fillable = [
        'lab_name',
        'lab_css_color'
    ];

    public function get_label($id)
    {
        $label = new Label();
        $label = $label->custom("select * from labels where lab_id = :id", ['id' => $id]);
        return $label[0];
    }
}