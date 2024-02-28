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
            'lab_name' => "test"
        ]);
        $labels = $label->all();
        $this->assertSame('test', end($labels)["lab_name"]);
        $label->delete(end($labels)["lab_id"]);
    }

    public function testUpdate()
    {
        $label = new Label();
        $label->create([
            'lab_name' => "test"
        ]);
        $labels = $label->all();
        $id = end($labels)["lab_id"];
        $label->find($id);
        $label->update([
            'lab_name' => "test2"
        ]);
        $lab = $label->find($id);
        $this->assertSame('test2', $lab["lab_name"]);
        $label->delete($lab["lab_id"]);
    }
}