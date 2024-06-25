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
        $result = $category->create([
            'cat_name' => "Materiel",
            'cat_css_color' => '#9b59b6'
        ]);
        $categories = $category->all();
        $this->assertTrue($result);
        $this->assertSame('Materiel', end($categories)["cat_name"]);
        $this->assertSame('#9b59b6', end($categories)["cat_css_color"]);
        $category->delete(end($categories)["cat_id"]);

        $category = new Category();
        $result = $category->create([
            'cat_name' => "Materiel",
            'cat_css_color' => 123
        ]);
        $categories = $category->all();
        $this->assertFalse($result);
        $this->assertNotEquals(123, end($categories)["cat_css_color"]);

        $category = new Category();
        $result = $category->create([
            'cat_name' => 56,
            'cat_css_color' => '#9b59b6'
        ]);
        $categories = $category->all();
        $this->assertFalse($result);
        $this->assertNotEquals(56, end($categories)["cat_name"]);
    }

    public function testUpdate()
    {
        $category = new Category();
        $category->create([
            'cat_name' => "test",
            'cat_css_color' => '#ffffff'
        ]);
        $categories = $category->all();
        $id = end($categories)["cat_id"];
        $category->find($id);
        $category->update([
            'cat_name' => "test2",
            'cat_css_color' => '#000000'
        ]);
        $cat = $category->find($id);
        $this->assertSame('test2', $cat["cat_name"]);
        $this->assertSame('#000000', $cat["cat_css_color"]);
        $category->delete($cat["cat_id"]);
    }

    public function testDelete()
    {
        $cat = new Category();
        
        $cat->find(1);
        # tentative de suppression de la catégorie
        $resultAutre = $cat->delete(1);
        # Vérifier que la catégorie n'a pas été supprimée
        $this->assertFalse($resultAutre);

        $cat->create([
            'cat_name' => "test",
            'cat_css_color' => '#ffffff'
        ]);
        $categories = $cat->all();
        $id = end($categories)["cat_id"];
        $resultOther = $cat->delete($id);
        $this->assertTrue($resultOther);
    }
}