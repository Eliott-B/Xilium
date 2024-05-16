<?php

namespace app\controllers;

use app\models\Ticket;
use app\models\Category;
use app\models\Label;
use app\models\Priority;
use app\models\Status;
use app\models\Comment;
use app\models\User;

/**
 * Module du controleur des tickets
 */
class TicketController
{

    /**
     * Affiche le formulaire pour la création d'un ticket
     */
    public function create_form()
    {
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
            'label_id' => $_POST['problem'],
            'priority_id' => $_POST['priority'],
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
    public function update_form($id)
    {

        $_SESSION['previous_url'] = $_SERVER['HTTP_REFERER'];

        $ticket = new Ticket();
        $ticket = $ticket->find($id);
        $ticket = (array) $ticket;

        if ($ticket['author_id'] !== $_SESSION['id'] &&
            $_SESSION['role'] !== 10 && $_SESSION['role'] !== 50) {
            $_SESSION['error'] = "vous n'etes pas l'auteur de ce ticket";
            header('Location: /dashboard');
        } else {
            $category = new Category();
            $categories = $category->all();
            $label = new Label();
            $labels = $label->all();
            $priority = new Priority();
            $priorities = $priority->all();

            if ($_SESSION['role'] == 10 || $_SESSION['role'] == 50) {
                require 'views/update_technicien.php';
            }
            else {
                require 'views/update.php';
            }
        }
    }

    /** Fonction pour modifier un ticket
     * @param int $id id du ticket à modifier
     */
    public function update($id)
    {

        if(!isset($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'etes pas connecté";
            header('Location: /login');
        }

        $ticket = new Ticket();
        $ticket = $ticket->find($id);

        $ticket = (array) $ticket;

        if ($ticket['author_id'] !== $_SESSION['id']) {
            if ($_SESSION['role'] === 10 || $_SESSION['role'] === 50) {
                $this->update_technicien($id);
                exit();
            }

            $_SESSION['error'] = "vous n'etes pas l'auteur de ce ticket";
            header('Location: /dashboard');
        }

        if ($ticket['tic_title'] !== $_POST['title'] || $ticket['tic_description'] !== $_POST['description'] || $ticket['label_id'] !== $_POST['problem'] || $ticket['priority_id'] !== $_POST['priority'] || $ticket['category_id'] !== $_POST['category']) {
            $ticket = new Ticket();
            $ticket->find($id);
            $ticket->update([
                'tic_title' => $_POST['title'],
                'tic_description' => $_POST['description'],
                'label_id' => $_POST['problem'],
                'priority_id' => $_POST['priority'],
                'category_id' => $_POST['category'],
                'updater_id' => $_SESSION['id'],
                'update_date' => date('Y-m-d H:i:s')
            ]);
        }

        header('Location: ' . $_SESSION['previous_url']);
    }

    /** Fonction pour modifier un ticket (technicien)
     * @param int $id id du ticket à modifier
     */
    public function update_technicien($id)
    {

        if(!isset($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'etes pas connecté";
            header('Location: /login');
        }

        $ticket = new Ticket();
        $ticket = $ticket->find($id);

        $ticket = (array) $ticket;

        if ($_SESSION['role'] !== 10 && $_SESSION['role'] !== 50) {
            $_SESSION['error'] = "vous n'etes pas technicien";
            header('Location: /');
        }

        if ($ticket['label_id'] !== $_POST['problem'] || $ticket['priority_id'] !== $_POST['priority'] || $ticket['category_id'] !== $_POST['category']) {
            $ticket = new Ticket();
            $ticket->find($id);
            $ticket->update([
                'label_id' => $_POST['problem'],
                'priority_id' => $_POST['priority'],
                'category_id' => $_POST['category'],
                'updater_id' => $_SESSION['id'],
                'update_date' => date('Y-m-d H:i:s')
            ]);
        }

        header('Location: /ticket/' . $id);
    }

    /** Fonction permettant d'afficher la confirmation de fermeture d'un ticket
     *  @param int $id id du ticket à fermer
     */
    public function close_form($id)
    {
        $_SESSION['previous_url'] = $_SERVER['HTTP_REFERER'];

        if (!isset ($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'etes pas connecté";
            header('Location: /login');
        }

        $ticket = new Ticket();
        $ticket = $ticket->find($id);
        $ticket = (array) $ticket;

        if ($ticket['author_id'] !== $_SESSION['id'] &&
            $_SESSION['role'] !== 10 &&
            $_SESSION['role'] !== 50) {
            $_SESSION['error'] = "vous n'êtes ni l'auteur de ce ticket ni un technicien";
            header('Location: /dashboard');
        } else {
            require 'views/close.php';
        }
    }

    /** Fonction permettant de fermer un ticket
     *  @param int $id id du ticket à fermer
     */
    public function close($id)
    {
        $ticket = new Ticket();
        $ticket = $ticket->find($id);
        $ticket = (array) $ticket;

        if ($_POST['response'] === 'yes') {
            if ($ticket['author_id'] == $_SESSION['id'] ||
                $_SESSION['role'] == 10 ||
                $_SESSION['role'] == 50) {
                $ticket = new Ticket();
                $ticket->find($id);
                $status = new Status();
                $status_close = 'Fermé';
                $ticket->update([
                    'status_id' => (int) $status->custom("select * from status where sta_name = :name", ['name' => $status_close])[0]['sta_id'],
                    'updater_id' => $_SESSION['id'],
                    'update_date' => date('Y-m-d H:i:s')
                ]);
            } else {
                $_SESSION['error'] = "vous n'êtes ni l'auteur de ce ticket ni un technicien";
            }
        }



        header('Location: ' . $_SESSION['previous_url']);

    }

    /** Fonction permettant de commenter un ticket
     *  @param int $id id du ticket à commenter
     */
    public function comment($id)
    {
        if (!isset ($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'etes pas connecté";
            header('Location: /login');
        }

        if ($ticket['author_id'] == $_SESSION['id'] ||
            $_SESSION['role'] == 10 ||
            $_SESSION['role'] == 50) {    
            $comment = new Comment();
            $comment->create([
                'com_title' => $_POST['title'],
                'com_comment' => $_POST['comment'],
                'com_date' => date('Y-m-d H:i:s'),
                'ticket_id' => $id,
                'user_id' => $_SESSION['id'],
                // TODO: 'reply to' -> à voir si on peut répondre à un commentaire (actuellement tous les commentaires sont des réponses à un ticket)
                
            ]);
        } else {
            $_SESSION['error'] = "vous n'êtes ni l'auteur de ce ticket ni un technicien";
        }

        $previous_url = $_SERVER['HTTP_REFERER'];
        header('Location: ' . $previous_url);

    }
    

    /** Fonction permettant d'afficher un ticket
     *  @param int $id id du ticket à afficher
     */
    public function show($id)
    {

        if (!isset ($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'etes pas connecté";
            header('Location: /login');
        }

        $ticket = new Ticket();
        try {
            
            $ticket = $ticket->find($id);
            
        } catch (\Exception $e) {
            $_SESSION['error'] = "Ce ticket n'existe pas";
            header('Location: /dashboard');
        }

        $ticket = (array) $ticket;

        if ($ticket['author_id'] !== $_SESSION['id'] && 
            $ticket['tech_id'] !== $_SESSION['id'] &&
            ($_SESSION['role'] !== 10 && $_SESSION['role'] !== 50 || $ticket['tech_id'] !== NULL)) {
            $_SESSION['error'] = "vous n'etes pas l'auteur de ce ticket";
            header('Location: /dashboard');
        }


        $comments = new Comment();
        $comments = $comments->get_comments($ticket['tic_id']);

        $view_comments = [];
        foreach ($comments as $comment) {
            $user = new User();
            $user = $user->custom("select use_name, use_firstname from users where use_id = :id", ['id' => $comment['user_id']])[0];
            $comment['user'] = $user;
            $view_comments[] = $comment;
        }
        $comments = $view_comments;

        $status = new Status();
        $status = $status->get_status($ticket['status_id']);

        $category = new Category();
        $category = $category->get_category($ticket['category_id']);

        $label = new Label();
        $label = $label->get_label($ticket['label_id']);

        $priority = new Priority();
        $priority = $priority->get_priority($ticket['priority_id']);


        $users = new User();
        $users = $users->custom("select use_name, use_firstname from users where use_id = :id", ['id' => $ticket['author_id']])[0];

        $tech = new User();
        $tech = $tech->custom("select use_name, use_firstname from users where use_id = :id", ['id' => $ticket['tech_id']])[0];

        require 'views/ticket.php';
    }

    /** Fonction pour afficher le formulaire de modification du status d'un ticket
     * @param int $id id du ticket à modifier
     */
    public function update_status_form($id)
    {
        $ticket = new Ticket();
        $ticket = $ticket->find($id);
        $ticket = (array) $ticket;

        if ($ticket['tech_id'] !== $_SESSION['id']) {
            $_SESSION['error'] = "vous n'êtes pas technicien";
            header('Location: /dashboard');
        } else {
            $status = new Status();
            $statuses = $status->all();

            require 'views/update_status.php';
        }
    }

    /** Fonction pour modifier le status d'un ticket
     * @param int $id id du ticket à modifier
     */
    public function update_status($id)
    {
        if(!isset($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'etes pas connecté";
            header('Location: /login');
        }

        $ticket = new Ticket();
        $ticket = $ticket->find($id);

        $ticket = (array) $ticket;

        if ($ticket['tech_id'] !== $_SESSION['id']) {
            $_SESSION['error'] = "vous n'êtes pas technicien";
            header('Location: /dashboard');
        }

        if ($ticket['status_id'] !== $_POST['status']) {
            $ticket = new Ticket();
            $ticket->find($id);
            $ticket->update([
                'status_id' => $_POST['status']
            ]);
        }

        header('Location: /ticket/' . $id);
    }

    /** Fonction permettant d'afficher la confirmation d'attribution d'un ticket
     *  @param int $id id du ticket à fermer
     */
    public function alocation_form($id)
    {
        if (!isset ($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'êtes pas connecté";
            header('Location: /login');
        }

        $ticket = new Ticket();
        $ticket = $ticket->find($id);
        $ticket = (array) $ticket;

        if ($_SESSION['role'] !== 10 &&
            $_SESSION['role'] !== 50) {
            $_SESSION['error'] = "vous n'êtes pas un technicien";
            header('Location: /dashboard');
        } else {
            require 'views/alocation.php';
        }
    }

    /** Fonction permettant de s'attribuer un ticket
     *  @param int $id id du ticket à fermer
     */
    public function alocation($id)
    {
        $ticket = new Ticket();
        $ticket = $ticket->find($id);
        $ticket = (array) $ticket;

        if ($_POST['response'] === 'yes') {
            if ($_SESSION['role'] == 10 ||
                $_SESSION['role'] == 50) {
                $ticket = new Ticket();
                $ticket->find($id);
                $ticket->update([
                    'tech_id' => $_SESSION['id']
                ]);
            } else {
                $_SESSION['error'] = "vous n'êtes pas un technicien";
            }
        }
        header('Location: /ticket/' . $id);

    }

    /** Fonction permettant d'afficher la confirmation de désattribution d'un ticket
     *  @param int $id id du ticket à fermer
     */
    public function desalocation_form($id)
    {
        if (!isset ($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'êtes pas connecté";
            header('Location: /login');
        }

        $ticket = new Ticket();
        $ticket = $ticket->find($id);
        $ticket = (array) $ticket;

        if ($_SESSION['role'] !== 10 &&
            $_SESSION['role'] !== 50) {
            $_SESSION['error'] = "vous n'êtes pas un technicien";
            header('Location: /dashboard');
        } else {
            require 'views/desalocation.php';
        }
    }

    /** Fonction permettant de se désattribuer un ticket
     *  @param int $id id du ticket à fermer
     */
    public function desalocation($id)
    {
        $ticket = new Ticket();
        $ticket = $ticket->find($id);
        $ticket = (array) $ticket;

        if ($_POST['response'] === 'yes') {
            if ($_SESSION['role'] == 10 ||
                $_SESSION['role'] == 50) {
                $ticket = new Ticket();
                $ticket->find($id);
                $ticket->update([
                    'tech_id' => NULL
                ]);
            } else {
                $_SESSION['error'] = "vous n'êtes pas un technicien";
            }
        }
        header('Location: /techniciens-dashboard');

    }
}