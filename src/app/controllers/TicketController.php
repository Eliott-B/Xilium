<?php

namespace app\controllers;

use app\models\Ticket;

class TicketController
{


    public function list_tickets()
    {
        $tickets = new Ticket();
        $tickets = $tickets->all();

        var_dump($tickets);
    }

    public function show_ticket($id)
    {
        $ticket = new Ticket();
        $ticket = $ticket->find($id);

        var_dump($ticket);
    }

    public function delete($id)
    {
        $ticket = new Ticket();
        $ticket = $ticket->delete($id);

        var_dump($ticket);
    }

    public function create_form()
    {
        echo "
        <form action='' method='post'>
            <label for='title'>Nom</label>
            <input type='text' name='title' id='title'>
            <input type='submit' value='Ajouter'>
        </form>
        ";
    }

    public function create()
    {
        $ticket = new Ticket();
        $ticket->create(['title' => $_POST['title']]);
    }

    public function update_form($id){
        $ticket = new Ticket();
        $ticket = $ticket->find($id);
        echo "
        <form action='./' method='post'>
            <input type='hidden' name='id' value='$id'>
            <label for='title'>Nom</label>
            <input type='text' name='title' id='title' value='" . $ticket['tic_title'] . "'>
            <input type='submit' value='Ajouter'>
        </form>
        ";
    }

    public function update(){
        $ticket = new Ticket();
        $ticket = $ticket->find($_POST['id']);
        var_dump($ticket);
        $ticket->update(['tic_title' => $_POST['title']]);
    }


}