<?php

namespace app\xiliumtest;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use app\models\Priority;

final class PriorityTest extends TestCase
{
    public function testCreation()
    {
        $priority = new Priority();
        $priority->create([
            'pri_name' => "test",
            'pri_index' => 5,
            'pri_css_color' => '#ffffff'
        ]);
        $priorities = $priority->all();
        $this->assertSame('test', end($priorities)["pri_name"]);
        $this->assertSame(5, end($priorities)["pri_index"]);
        $this->assertSame('#ffffff', end($priorities)["pri_css_color"]);
        $priority->delete(end($priorities)["pri_id"]);
    }

    public function testUpdate()
    {
        $priority = new Priority();
        $priority->create([
            'pri_name' => "test",
            'pri_index' => 5,
            'pri_css_color' => '#ffffff'
        ]);
        $priorities = $priority->all();
        $id = end($priorities)["pri_id"];
        $priority->find($id);
        $priority->update([
            'pri_name' => "test",
            'pri_index' => 6,
            'pri_css_color' => '#000000'
        ]);
        $prio = $priority->find($id);
        $this->assertSame('test', $prio["pri_name"]);
        $this->assertSame(6, $prio["pri_index"]);
        $this->assertSame('#000000', $prio["pri_css_color"]);
        $priority->delete($prio["pri_id"]);
    }
}