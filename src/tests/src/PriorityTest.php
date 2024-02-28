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
            'pri_index' => 5
        ]);
        $priorities = $priority->all();
        $this->assertSame('test', end($priorities)["pri_name"]);
    }

    public function testUpdate()
    {
        $priority = new Priority();
        $priorities = $priority->all();
        $id = end($priorities)["pri_id"];
        $priority->find($id);
        $priority->update([
            'pri_name' => "test",
            'pri_index' => 6
        ]);
        $priority = $priority->find($id);
        $this->assertSame('test', $priority["pri_name"]);
        $this->assertSame(6, $priority["pri_index"]);
    }
}