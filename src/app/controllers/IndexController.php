<?php

namespace app\controllers;

use app\models\Ticket;

class IndexController
{
    public function index()
    {
        $ticket = new Ticket();
        $tickets = $ticket->custom("select * from tickets where status_id =:id order by update_date desc", ['id' => 1]);
        $tickets = array_slice($tickets, 0, 10);
        require 'views/index.php';
    }
}