<?php

namespace app\xiliumtest;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use app\models\Ticket;
use app\models\User;
use app\models\Priority;
use app\models\Label;
use app\models\Status;
use app\models\Category;

final class TicketTest extends TestCase
{
    public function testCreation()
    {
        $user = new User();
        $user->create([
            'use_username' => "test_usernameeesss",
            'use_password' => "test_password",
            'use_name' => "test_name",
            'use_firstname' => "test_firstname",
            'role_id' => 1
        ]);
        $users = $user->all();

        $priority = new Priority();
        $priority->create([
            'pri_name' => "test",
            'pri_index' => 5
        ]);
        $priorities = $priority->all();

        $status = new Status();
        $status->create([
            'sta_name' => "test"
        ]);
        $statuss = $status->all();

        $label = new Label();
        $label->create([
            'lab_name' => "test"
        ]);
        $labels = $label->all();

        $category = new Category();
        $category->create([
            'cat_name' => "test"
        ]);
        $categories = $category->all();

        $ticket = new Ticket();
        $ticket->create([
            'tic_title' => "test",
            'tic_description' => "test",
            'author_id' => end($users)["use_id"],
            'label_id' => end($labels)["lab_id"],
            'category_id' => end($categories)["cat_id"],
            'priority_id' => end($priorities)["pri_id"],
            'status_id' => end($statuss)["sta_id"],
            'updater_id' => end($users)["use_id"]
        ]);
        $tickets = $ticket->all();
        $this->assertSame('test', end($tickets)["tic_title"]);
        $this->assertSame('test', end($tickets)["tic_description"]);
        $this->assertSame(end($users)["use_id"], end($tickets)["author_id"]);
        $this->assertSame(1, end($tickets)["label_id"]);
        $this->assertSame(1, end($tickets)["priority_id"]);
        $this->assertSame(1, end($tickets)["status_id"]);
        $this->assertSame(end($users)["use_id"], end($tickets)["updater_id"]);
        // $ticket->delete(end($tickets)["tic_id"]);
        // $user->delete(end($users)["use_id"]);
        // $label->delete(end($labels)["lab_id"]);
        // $status->delete(end($statuss)["sta_id"]);
        // $priority->delete(end($priorities)["pri_id"]);
        // $category->delete(end($categories)["cat_id"]);
    }

    // public function testUpdate()
    // {
    //     $ticket = new Ticket();
    //     $ticket->create([
    //         'tic_title' => "test"
    //     ]);
    //     $tickets = $ticket->all();
    //     $id = end($tickets)["tic_id"];
    //     $ticket->find($id);
    //     $ticket->update([
    //         'tic_title' => "test2"
    //     ]);
    //     $tic = $ticket->find($id);
    //     $this->assertSame('test2', $tic["tic_title"]);
    //     $ticket->delete($tic["tic_id"]);
    // }
}