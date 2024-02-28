<?php

namespace app\models;

class Status extends Model
{
    protected string $table = 'status';
    protected array $fillable = [
        'sta_name'
    ];

    public function get_status($id)
    {
        $status = new Status();
        $status = $status->custom("select sta_name from status where sta_id = :id", ['id' => $id]);
        return $status[0]['sta_name'];
    }
}