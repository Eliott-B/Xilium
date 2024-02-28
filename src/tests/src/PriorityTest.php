<?php

namespace rooteam\xiliumtest;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use app\models;

final class PriorityTest extends TestCase
{
    public function testCreation()
    {
        $priority = new Priority();
        $priority->create([
            'pri_name' => "test",
            'pri_index' => 5
        ]);
        $priorities = $priorities->all();
    
        $this->assertSame('test', $priorities.Last().pri_name);
    }
}