<?php

namespace app\controllers;

use app\models\Ticket;
use app\models\User;
use app\models\Status;
use app\models\Category;
use app\models\Label;
use app\models\Priority;
use app\models\Comment;
use app\models\Role;

/**
 * Module du controleur du tableau de bord des techniciens
 */
class TechnicienDashboardController
{
    /**
     * Intègre les informations du tableau de bord dans la vue
     * Renvoi vers la page de connexion si l'utilisateur n'est pas connecté
     */
    public function index()
    {
        if (!isset($_SESSION['id'])) {
            $_SESSION['error'] = "Vous devez être connecté pour accéder à cette page";
            header('Location: /login');
            exit();
        }

        if (!in_array(Role::getRoleIdByUserId($_SESSION['id']), [10, 50])) {
            $_SESSION['error'] = "Vous n'avez pas les droits pour accéder à cette page";
            header('Location: /dashboard');
            exit();
        }

        $ticket = new Ticket();
        $tickets = $ticket->custom("select * from tickets order by creation_date desc", []);
        $view_tickets = [];


        foreach ($tickets as $ticket) {

            $comments = new Comment();
            $comments = $comments->get_comments($ticket['tic_id']);

            $view_comments = [];
            foreach ($comments as $comment) {
                $user = new User();
                $user = $user->custom("select use_name, use_firstname from users where use_id = :id", ['id' => $comment['user_id']])[0];
                $comment['user'] = $user;
                $view_comments[] = $comment;
            }
            // var_dump($view_comments);
            $ticket['comments'] = $view_comments;

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

            $user = new User();
            $user = $user->custom("select use_name, use_firstname from users where use_id = :id", ['id' => $ticket['author_id']])[0];

            $view_tickets[] = [$user, $ticket];
        }

        require 'views/techniciens_dashboard.php';
    }

    public function give_ticket_form($ticket_id)
    {
        $user =

        $techs = new User();
        $techs = $techs->custom("SELECT * FROM users WHERE role_id IN ( 10, 50)");


        require 'views/give_ticket.php';
    }

    public function give_ticket($ticket_id){
        $ticket = new Ticket();
        $ticket->find($ticket_id);

        if (!empty($_POST['tech_id'])) {
            $ticket->update(['tech_id' => $_POST['tech_id']]);
        } else {
            $ticket->update(['tech_id' => NULL]);
        }

        header('Location: /techniciens-dashboard');
    }
}