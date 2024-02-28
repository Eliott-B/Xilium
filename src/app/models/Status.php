<?php

namespace app\models;

class Status extends Model
{
    protected string $table = 'status';
    protected array $fillable = [
        'sta_name',
        'sta_css_color'
    ];

    public function get_status($id)
    {
        $status = new Status();
        $status = $status->custom("select * from status where sta_id = :id", ['id' => $id]);
        return $status[0];
    }
}