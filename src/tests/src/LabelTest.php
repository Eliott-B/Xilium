<?php

namespace app\xiliumtest;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use app\models\Label;

final class LabelTest extends TestCase
{
    public function testCreation()
    {
        $label = new Label();
        $result = $label->create([
            'lab_name' => "Amelioration",
            'lab_css_color' => '#9b59b6'
        ]);
        $labels = $label->all();
        $this->assertTrue($result);
        $this->assertSame('Amelioration', end($labels)["lab_name"]);
        $this->assertSame('#9b59b6', end($labels)["lab_css_color"]);
        $label->delete(end($labels)["lab_id"]);

        $label = new Label();
        $result = $label->create([
            'lab_name' => "Amelioration",
            'lab_css_color' => 123
        ]);
        $labels = $label->all();
        $this->assertFalse($result);
        $this->assertNotEquals(123, end($labels)["lab_css_color"]);

        $label = new Label();
        $result = $label->create([
            'lab_name' => 56,
            'lab_css_color' => '#9b59b6'
        ]);
        $labels = $label->all();
        $this->assertFalse($result);
        $this->assertNotEquals(56, end($labels)["lab_name"]);
    }

    public function testUpdate()
    {
        $label = new Label();
        $label->create([
            'lab_name' => "test",
            'lab_css_color' => '#ffffff'
        ]);
        $labels = $label->all();
        $id = end($labels)["lab_id"];
        $label->find($id);
        $label->update([
            'lab_name' => "test2",
            'lab_css_color' => '#000000'
        ]);
        $lab = $label->find($id);
        $this->assertSame('test2', $lab["lab_name"]);
        $this->assertSame('#000000', $lab["lab_css_color"]);
        $label->delete($lab["lab_id"]);
    }

    public function testDelete()
    {
        $lab = new Label();

        $lab->find(1);
        # tentative de suppression du label
        $resultAutre = $lab->delete(1);
        # Vérifier que le label n'a pas été supprimé
        $this->assertFalse($resultAutre);

        $lab->create([
            'lab_name' => "test",
            'lab_css_color' => '#ffffff'
        ]);
        $labels = $lab->all();
        $id = end($labels)["lab_id"];
        $resultOther = $lab->delete($id);
        $this->assertTrue($resultOther);
    }
}