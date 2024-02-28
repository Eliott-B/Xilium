<?php

namespace app\models;

class Priority extends Model
{
    protected string $table = 'priorities';
    protected array $fillable = [
        'pri_name',
        'pri_index',
        'pri_css_color'
    ];

    public function get_priority($id)
    {
        $priority = new Priority();
        $priority = $priority->custom("select * from priorities where pri_id = :id", ['id' => $id]);
        return $priority[0];
    }
}