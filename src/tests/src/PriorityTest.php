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
        $result = $priority->create([
            'pri_name' => "nom",
            'pri_index' => 2,
            'pri_css_color' => '#2ecc71'
        ]);
        $priorities = $priority->all();
        $this->assertTrue($result);
        $this->assertSame('nom', end($priorities)["pri_name"]);
        $this->assertEquals(2, end($priorities)["pri_index"]);
        $this->assertSame('#2ecc71', end($priorities)["pri_css_color"]);
        $priority->delete(end($priorities)["pri_id"]);

        $priority = new Priority();
        $result = $priority->create([
            'pri_name' => "nom",
            'pri_index' => 2,
            'pri_css_color' => 123
        ]);
        $priorities = $priority->all();
        $this->assertFalse($result);
        $this->assertNotEquals(123, end($priorities)["pri_css_color"]);

        $priority = new Priority();
        $result = $priority->create([
            'pri_name' => "nom",
            'pri_index' => 1.5,
            'pri_css_color' => '#9b59b6'
        ]);
        $priorities = $priority->all();
        $this->assertFalse($result);
        $this->assertNotEquals(1.5, end($priorities)["pri_index"]);

        $priority = new Priority();
        $result = $priority->create([
            'pri_name' => 41,
            'pri_index' => 2,
            'pri_css_color' => '#9b59b6'
        ]);
        $priorities = $priority->all();
        $this->assertFalse($result);
        $this->assertNotEquals(41, end($priorities)["pri_name"]);
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