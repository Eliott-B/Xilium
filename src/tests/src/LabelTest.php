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
        $label->create([
            'lab_name' => "test",
            'lab_css_color' => '#ffffff'
        ]);
        $labels = $label->all();
        $this->assertSame('test', end($labels)["lab_name"]);
        $this->assertSame('#ffffff', end($labels)["lab_css_color"]);
        $label->delete(end($labels)["lab_id"]);
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
}