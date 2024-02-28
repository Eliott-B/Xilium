<?php

namespace app\xiliumtest;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use app\models\Status;

final class StatusTest extends TestCase
{
    public function testCreation()
    {
        $status = new Status();
        $status->create([
            'sta_name' => "test"
        ]);
        $statuss = $status->all();
        $this->assertSame('test', end($statuss)["sta_name"]);
        $status->delete(end($statuss)["sta_id"]);
    }

    public function testUpdate()
    {
        $status = new Status();
        $status->create([
            'sta_name' => "test"
        ]);
        $statuss = $status->all();
        $id = end($statuss)["sta_id"];
        $status->find($id);
        $status->update([
            'sta_name' => "test2"
        ]);
        $stat = $status->find($id);
        $this->assertSame('test2', $stat["sta_name"]);
        $status->delete($stat["sta_id"]);
    }
}