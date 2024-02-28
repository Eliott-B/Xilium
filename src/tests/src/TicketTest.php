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
            'use_username' => "test_username",
            'use_password' => "test_password",
            'use_name' => "test_name",
            'use_firstname' => "test_firstname",
            'role_id' => 1
        ]);
        $users = $user->all();

        $priority = new Priority();
        $priority->create([
            'pri_name' => "test",
            'pri_index' => 10,
            'pri_css_color' => '#ffffff'
        ]);
        $priorities = $priority->all();

        $status = new Status();
        $status->create([
            'sta_name' => "test",
            'sta_css_color' => '#ffffff'
        ]);
        $statuss = $status->all();

        $label = new Label();
        $label->create([
            'lab_name' => "test",
            'lab_css_color' => '#ffffff'
        ]);
        $labels = $label->all();

        $category = new Category();
        $category->create([
            'cat_name' => "test",
            'cat_css_color' => '#ffffff'
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
        $this->assertSame(end($labels)["lab_id"], end($tickets)["label_id"]);
        $this->assertSame(end($categories)["cat_id"], end($tickets)["category_id"]);
        $this->assertSame(end($priorities)["pri_id"], end($tickets)["priority_id"]);
        $this->assertSame(end($statuss)["sta_id"], end($tickets)["status_id"]);
        $this->assertSame(end($users)["use_id"], end($tickets)["updater_id"]);
        $ticket->delete(end($tickets)["tic_id"]);
        $user->delete(end($users)["use_id"]);
        $label->delete(end($labels)["lab_id"]);
        $status->delete(end($statuss)["sta_id"]);
        $priority->delete(end($priorities)["pri_id"]);
        $category->delete(end($categories)["cat_id"]);
    }

    public function testUpdate()
    {
        $user = new User();
        $user->create([
            'use_username' => "test_username",
            'use_password' => "test_password",
            'use_name' => "test_name",
            'use_firstname' => "test_firstname",
            'role_id' => 1
        ]);
        $users = $user->all();

        $priority = new Priority();
        $priority->create([
            'pri_name' => "test",
            'pri_index' => 10,
            'pri_css_color' => '#ffffff'
        ]);
        $priorities = $priority->all();

        $status = new Status();
        $status->create([
            'sta_name' => "test",
            'sta_css_color' => '#ffffff'
        ]);
        $statuss = $status->all();

        $label = new Label();
        $label->create([
            'lab_name' => "test",
            'lab_css_color' => '#ffffff'
        ]);
        $labels = $label->all();

        $category = new Category();
        $category->create([
            'cat_name' => "test",
            'cat_css_color' => '#ffffff'
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
        $id = end($tickets)["tic_id"];
        $ticket->find($id);

        $olduser = end($users)["use_id"];
        $oldlabel = end($labels)["lab_id"];
        $oldcategory = end($categories)["cat_id"];
        $oldpriority = end($priorities)["pri_id"];
        $oldstatus = end($statuss)["sta_id"];

        $user = new User();
        $user->create([
            'use_username' => "test_username2",
            'use_password' => "test_password",
            'use_name' => "test_name",
            'use_firstname' => "test_firstname",
            'role_id' => 1
        ]);
        $users = $user->all();

        $priority = new Priority();
        $priority->create([
            'pri_name' => "test",
            'pri_index' => 10,
            'pri_css_color' => '#ffffff'
        ]);
        $priorities = $priority->all();

        $status = new Status();
        $status->create([
            'sta_name' => "test",
            'sta_css_color' => '#ffffff'
        ]);
        $statuss = $status->all();

        $label = new Label();
        $label->create([
            'lab_name' => "test",
            'lab_css_color' => '#ffffff'
        ]);
        $labels = $label->all();

        $category = new Category();
        $category->create([
            'cat_name' => "test",
            'cat_css_color' => '#ffffff'
        ]);
        $categories = $category->all();

        $ticket->update([
            'tic_title' => "test2",
            'tic_description' => "test2",
            'label_id' => end($labels)["lab_id"],
            'category_id' => end($categories)["cat_id"],
            'priority_id' => end($priorities)["pri_id"],
            'status_id' => end($statuss)["sta_id"],
            'updater_id' => end($users)["use_id"]
        ]);
        $tic = $ticket->find($id);
        $this->assertSame('test2', $tic["tic_title"]);
        $this->assertSame('test2', $tic["tic_description"]);
        $this->assertNotSame(end($users)["use_id"], $tic["author_id"]);
        $this->assertSame(end($labels)["lab_id"], $tic["label_id"]);
        $this->assertSame(end($categories)["cat_id"], $tic["category_id"]);
        $this->assertSame(end($priorities)["pri_id"], $tic["priority_id"]);
        $this->assertSame(end($statuss)["sta_id"], $tic["status_id"]);
        $this->assertSame(end($users)["use_id"], $tic["updater_id"]);
        $ticket->delete($tic["tic_id"]);
        $user->delete(end($users)["use_id"]);
        $label->delete(end($labels)["lab_id"]);
        $status->delete(end($statuss)["sta_id"]);
        $priority->delete(end($priorities)["pri_id"]);
        $category->delete(end($categories)["cat_id"]);
        $user->delete($olduser);
        $label->delete($oldlabel);
        $status->delete($oldstatus);
        $priority->delete($oldpriority);
        $category->delete($oldcategory);
    }
}