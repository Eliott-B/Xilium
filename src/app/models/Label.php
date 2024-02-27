<?php

namespace app\models;

class Label extends Model
{
    protected string $table = 'labels';
    protected array $fillable = [
        'lab_name'
    ];

    public function get_label($id)
    {
        $label = new Label();
        $label = $label->custom("select lab_name from labels where lab_id = :id", ['id' => $id]);
        return $label[0]['lab_name'];
    }
}