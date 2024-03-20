<?php

namespace app\controllers;

use app\models\Ticket;
use app\models\Category;
use app\models\Label;
use app\models\Priority;

/**
 * Module du controleur des tickets
 */
class TicketController
{
    /**
     * Liste les tickets
     */
    public function list_tickets()
    {
        $tickets = new Ticket();
        $tickets = $tickets->all();

        var_dump($tickets);
    }

    /**
     * Affiche un ticket
     * @param int $id identifiant du ticket
     */
    public function show_ticket($id)
    {
        $ticket = new Ticket();
        $ticket = $ticket->find($id);

        var_dump($ticket);
    }

    /**
     * Supprime un ticket
     * @param int $id identifiant du ticket
     */
    public function delete($id)
    {
        $ticket = new Ticket();
        $ticket = $ticket->delete($id);

        var_dump($ticket);
    }

    /**
     * Affiche le formulaire pour la création d'un ticket
     */
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

    /**
     * Crée un ticket à partir des données du formulaire
     */
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

    /**
     * Affiche le formulaire pour la modification d'un ticket
     */
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

    /**
     * Modifie un ticket à partir des données du formulaire
     */
    public function update(){
        $ticket = new Ticket();
        $ticket = $ticket->find($_POST['id']);
        var_dump($ticket);
        $ticket->update(['tic_title' => $_POST['title']]);
    }
}