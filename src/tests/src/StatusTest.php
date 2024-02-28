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
            'sta_name' => "test",
            'sta_css_color' => '#ffffff'
        ]);
        $statuss = $status->all();
        $this->assertSame('test', end($statuss)["sta_name"]);
        $this->assertSame('#ffffff', end($statuss)["sta_css_color"]);
        $status->delete(end($statuss)["sta_id"]);
    }

    public function testUpdate()
    {
        $status = new Status();
        $status->create([
            'sta_name' => "test",
            'sta_css_color' => '#ffffff'
        ]);
        $statuss = $status->all();
        $id = end($statuss)["sta_id"];
        $status->find($id);
        $status->update([
            'sta_name' => "test2",
            'sta_css_color' => '#000000'
        ]);
        $stat = $status->find($id);
        $this->assertSame('test2', $stat["sta_name"]);
        $this->assertSame('#000000', $stat["sta_css_color"]);
        $status->delete($stat["sta_id"]);
    }
}