<?php

namespace app\xiliumtest;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use app\models\Category;

final class CategoryTest extends TestCase
{
    public function testCreation()
    {
        $category = new Category();
        $category->create([
            'cat_name' => "test"
        ]);
        $categories = $category->all();
        $this->assertSame('test', end($categories)["cat_name"]);
        $category->delete(end($categories)["cat_id"]);
    }

    public function testUpdate()
    {
        $category = new Category();
        $category->create([
            'cat_name' => "test"
        ]);
        $categories = $category->all();
        $id = end($categories)["cat_id"];
        $category->find($id);
        $category->update([
            'cat_name' => "test2"
        ]);
        $cat = $category->find($id);
        $this->assertSame('test2', $cat["cat_name"]);
        $category->delete($cat["cat_id"]);
    }
}