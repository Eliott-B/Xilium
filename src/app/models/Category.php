<?php

namespace app\models;

class Category extends Model
{
    protected string $table = 'categories';
    protected array $fillable = [
        'cat_name'
    ];

    public function get_category($id)
    {
        $category = new Category();
        $category = $category->custom("select cat_name from categories where cat_id = :id", ['id' => $id]);
        return $category[0]['cat_name'];
    }
}