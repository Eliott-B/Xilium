<?php

namespace app\models;

class Priority extends Model
{
    protected string $table = 'priorities';
    protected array $fillable = [
        'pri_name',
        'pri_index'
    ];

    public function get_priority($id)
    {
        $priority = new Priority();
        $priority = $priority->custom("select pri_name from priorities where pri_id = :id", ['id' => $id]);
        return $priority[0]['pri_name'];
    }
}