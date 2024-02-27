<?php

namespace app\controllers;

use app\models\Ticket;
use app\models\User;

class IndexController
{
    public function index()
    {
        $logedin = isset($_SESSION['id']);

        if ($logedin) {
            $ticket = new Ticket();
            $tickets = $ticket->custom("select * from tickets where author_id = :id AND status_id != 3", ['id' => $_SESSION['id']]);
            $user = new User();
            $users = $user->custom("select use_name, use_firstname from users where use_id = :id", ['id' => $_SESSION['id']]);
            $users = $users[0];
        }
        require 'views/index.php';

    }
}