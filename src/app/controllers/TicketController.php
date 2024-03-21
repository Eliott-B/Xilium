<?php

namespace app\controllers;

use app\models\Ticket;
use app\models\Category;
use app\models\Label;
use app\models\Priority;


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
        if (!isset($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'etes pas connecté";
            header('Location: /login');
        }
        $category = new Category();
        $categories = $category->all();
        $label = new Label();
        $labels = $label->all();
        $priority = new Priority();
        $priorities = $priority->all();

        require 'views/create.php';
    }

    public function create()
    {
        $ticket = new Ticket();
        $ticket->create([
            'tic_title' => $_POST['title'],
            'tic_description' => $_POST['description'],
            'author_id' => $_SESSION['id'],
            'label_id' =>  $_POST['problem'],
            'priority_id' =>  $_POST['priority'],
            'status_id' => 1,
            'category_id' => $_POST['category'],
            'updater_id' => $_SESSION['id'],
            'creation_date' => date('Y-m-d H:i:s'),
            'update_date' => date('Y-m-d H:i:s')
        ]);

        header('Location: /dashboard');
    }

    /** Fonction pour afficher le formulaire de modification d'un ticket
     * @param int $id id du ticket à modifier
     */
    public function update_form($id){
        if (!isset($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'etes pas connecté";
            header('Location: /login');
        }

        $ticket = new Ticket();
        $ticket = $ticket->find($id);
        $ticket = (array) $ticket;
        
        if ($ticket['author_id'] !== $_SESSION['id']) {
            $_SESSION['error'] = "vous n'etes pas l'auteur de ce ticket";
            header('Location: /dashboard');
        } else {
            $category = new Category();
            $categories = $category->all();
            $label = new Label();
            $labels = $label->all();
            $priority = new Priority();
            $priorities = $priority->all();

            require 'views/update.php';
        }
    }

    /** Fonction pour modifier un ticket
     * @param int $id id du ticket à modifier
     */
    public function update($id){
        $ticket = new Ticket();
        $ticket = $ticket->find($id);

        $ticket = (array) $ticket;

        if ($ticket['tic_title'] !== $_POST['title'] || $ticket['tic_description'] !== $_POST['description'] || $ticket['label_id'] !== $_POST['problem'] || $ticket['priority_id'] !== $_POST['priority'] || $ticket['category_id'] !== $_POST['category']) {
            $ticket = new Ticket();
            $ticket -> find($id);
            $ticket->update([
                'tic_title' => $_POST['title'],
                'tic_description' => $_POST['description'],
                'label_id' =>  $_POST['problem'],
                'priority_id' =>  $_POST['priority'],
                'category_id' => $_POST['category'],
                'updater_id' => $_SESSION['id'],
                'update_date' => date('Y-m-d H:i:s')
            ]);
        }

        header('Location: /dashboard');
    }
}