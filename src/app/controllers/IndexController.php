<?php

namespace app\controllers;

use app\models\Ticket;

class IndexController
{
    public function index()
    {
        $ticket = new Ticket();
        $tickets = $ticket->all();
        $tickets = array_slice($tickets, 0, 10);
        require 'views/index.php';
    }
}