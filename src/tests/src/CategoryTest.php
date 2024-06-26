<?php

namespace app\xiliumtest;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use app\models\Category;
use Exception;

final class CategoryTest extends TestCase
{
    public function testCreation()
    {
        $category = new Category();
        $category->create([
            'cat_name' => "Materiel",
            'cat_css_color' => '#9b59b6'
        ]);
        $categories = (array)$category->find($category->getId());
        $this->assertSame('Materiel', $categories["cat_name"]);
        $this->assertSame('#9b59b6', $categories["cat_css_color"]);
        $category->delete($categories["cat_id"]);

        try {
            $category = new Category();
            $category->create([
                'cat_name' => "Materiel",
                'cat_css_color' => 123
            ]);
            $this->fail("La couleur de la catégorie doit être une chaine de caractère");
        } catch (Exception $e) {
            $this->assertSame("La couleur de la catégorie doit être une chaine de caractère", $e->getMessage());
        }        

        try {
            $category = new Category();
            $category->create([
                'cat_name' => 123,
                'cat_css_color' => "#9b59b6"
            ]);
            $this->fail("Le nom de la catégorie doit être une chaine de caractère");
        } catch (Exception $e) {
            $this->assertSame("Le nom de la catégorie doit être une chaine de caractère", $e->getMessage());
        }
    }

    public function testUpdate()
    {
        $category = new Category();
        $category->create([
            'cat_name' => "test",
            'cat_css_color' => '#ffffff'
        ]);
        $categories = (array)$category->find($category->getId());
        $id = $categories["cat_id"];
        $category->find($id);
        $category->update([
            'cat_name' => "test2",
            'cat_css_color' => '#000000'
        ]);
        $cat = (array) $category->find($id);
        $this->assertSame('test2', $cat["cat_name"]);
        $this->assertSame('#000000', $cat["cat_css_color"]);
        $category->delete($cat["cat_id"]);

        try {
            $category = new Category();
            $category->create([
                'cat_name' => "test",
                'cat_css_color' => '#ffffff'
            ]);
            $categories = (array)$category->find($category->getId());
            $id = $categories["cat_id"];
            $category->find($id);
            $category->update([
                'cat_name' => 56,
                'cat_css_color' => '#000000'
            ]);
            $this->fail("Le nom de la catégorie doit être une chaine de caractère");
        } catch (Exception $e) {
            $category->delete($id);
            $this->assertSame("Le nom de la catégorie doit être une chaine de caractère", $e->getMessage());
        }
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