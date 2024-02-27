<?php

namespace app\controllers;

use app\models\Ticket;
use app\models\User;
use app\models\Status;

class DashboardController
{
    public function index()
    {
        
        if (!isset($_SESSION['id'])) {
            header('Location: /login');

        }
        else {
            $ticket = new Ticket();
            $tickets= $ticket->custom("select * from tickets where author_id = :id", ['id' => $_SESSION['id']]);
            $user = new User();
            $users = $user->custom("select use_name, use_firstname from users where use_id = :id", ['id' => $_SESSION['id']]);
            $users = $users[0];
            require 'views/dashboard.php';
        }

    }
}