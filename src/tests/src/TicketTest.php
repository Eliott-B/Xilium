<?php

namespace app\xiliumtest;

use Exception;
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

        $priority = new Priority();
        $priority->create([
            'pri_name' => "test",
            'pri_index' => 10,
            'pri_css_color' => '#ffffff'
        ]);

        $status = new Status();
        $status->create([
            'sta_name' => "test",
            'sta_css_color' => '#ffffff'
        ]);

        $label = new Label();
        $label->create([
            'lab_name' => "test",
            'lab_css_color' => '#ffffff'
        ]);

        $category = new Category();
        $category->create([
            'cat_name' => "test",
            'cat_css_color' => '#ffffff'
        ]);

        $ticket = new Ticket();
        $ticket->create([
            'tic_title' => "test",
            'tic_description' => "test",
            'author_id' => $user->getId(),
            'label_id' => $label->getId(),
            'category_id' => $category->getId(),
            'priority_id' => $priority->getId(),
            'status_id' => $status->getId(),
            'updater_id' => $user->getId()
        ]);
        $new_ticket = (array)$ticket->find($ticket->getId());
        $this->assertSame('test', $new_ticket["tic_title"]);
        $this->assertSame('test', $new_ticket["tic_description"]);
        $this->assertSame($user->getId(), $new_ticket["author_id"]);
        $this->assertSame($label->getId(), $new_ticket["label_id"]);
        $this->assertSame($category->getId(), $new_ticket["category_id"]);
        $this->assertSame($priority->getId(), $new_ticket["priority_id"]);
        $this->assertSame($status->getId(), $new_ticket["status_id"]);
        $this->assertSame($user->getId(), $new_ticket["updater_id"]);
        $ticket->delete($new_ticket["tic_id"]);
        $user->delete($user->getId());
        $label->delete($label->getId());
        $status->delete($status->getId());
        $priority->delete($priority->getId());
        $category->delete($category->getId());
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
        $tic = (array)$ticket->find($id);
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

    public function testDelete(){
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
        # Last ticket
        $result = (array)$ticket->find($ticket->getId());
        
        $ticket->delete($result["tic_id"]);
        $user->delete(end($users)["use_id"]);
        $label->delete(end($labels)["lab_id"]);
        $status->delete(end($statuss)["sta_id"]);
        $priority->delete(end($priorities)["pri_id"]);
        $category->delete(end($categories)["cat_id"]);
        
        try {
            $ticket->find($ticket->getId());
            $this->fail("Aucun enregistrement trouvé");
        }
        catch (Exception $e) {
            $this->assertEquals("Aucun enregistrement trouvé", $e->getMessage());
        }
    }
}