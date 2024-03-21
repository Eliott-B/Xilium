<?php

namespace app\controllers;

use app\models\Ticket;
use app\models\User;
use app\models\Status;
use app\models\Category;
use app\models\Label;
use app\models\Priority;

class DashboardController
{
    public function index()
    {
        $ticket = new Ticket();
        $tickets = $ticket->custom("select * from tickets where author_id = :id order by update_date desc", ['id' => $_SESSION['id']]);
        $user = new User();
        $users = $user->custom("select use_name, use_firstname from users where use_id = :id", ['id' => $_SESSION['id']]);
        $users = $users[0];

        $view_tickets = [];
        foreach ($tickets as $ticket) {
            $status = new Status();
            $status = $status->get_status($ticket['status_id']);
            $ticket['status'] = $status;

            $category = new Category();
            $category = $category->get_category($ticket['category_id']);
            $ticket['category'] = $category;
            $label = new Label();
            $label = $label->get_label($ticket['label_id']);
            $ticket['label'] = $label;
            $priority = new Priority();
            $priority = $priority->get_priority($ticket['priority_id']);
            $ticket['priority'] = $priority;
            $view_tickets[] = $ticket;
        }

        require 'views/dashboard.php';
    }
}