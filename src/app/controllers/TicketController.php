<?php

namespace app\controllers;

use app\Database;
use app\models\Role;
use app\models\Ticket;
use app\models\Category;
use app\models\Label;
use app\models\Priority;
use app\models\Status;
use app\models\Comment;
use app\models\User;
use app\models\Log;
use app\Database\getLastId;

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
        if ($_SESSION['role'] == 100) {
            $_SESSION['error'] = "vous n'avez pas l'accès à cette page";
            header('Location: /');
            exit();
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
        if ($_SESSION['role'] == 100) {
            $_SESSION['error'] = "vous n'avez pas l'accès à cette page";
            header('Location: /');
            exit();
        }

        $values_to_create = [
            'tic_title' => $_POST['title'],
            'tic_description' => $_POST['description'],
            'author_id' => $_SESSION['id'],
            'label_id' => $_POST['problem'],
            'priority_id' => (isset($_POST['priority'])) ? $_POST['priority'] : null,
            'status_id' => 1,
            'category_id' => $_POST['category'],
            'updater_id' => $_SESSION['id'],
            'creation_date' => date('Y-m-d H:i:s'),
            'update_date' => date('Y-m-d H:i:s')
        ];
        foreach ($values_to_create as $key => $value) {
            if ($value == null) {
                unset($values_to_create[$key]);
            }
        }
        $ticket = new Ticket();
        $ticket->create($values_to_create);

        $logs = new Log();
        $logs = $logs->custom("INSERT INTO logs (ticket_id, user_id, log_content) VALUES (:ticket_id:,:user_id:,:log_content)", [
            'ticket_id' => Database::getInstance()-> getLastId(),
            'user_id' => $_SESSION['id'],
            'log_content' => "Nouveau ticket",
        ]);

        header('Location: /dashboard');
    }


    /** Fonction pour afficher le formulaire de modification d'un ticket
     * @param int $id id du ticket à modifier
     */
    public function update_form($id)
    {
        if ($_SESSION['role'] == 100) {
            $_SESSION['error'] = "vous n'avez pas l'accès à cette page";
            header('Location: /');
            exit();
        }

        $_SESSION['previous_url'] = $_SERVER['HTTP_REFERER'];

        $ticket = new Ticket();
        $ticket = $ticket->find($id);
        $ticket = (array) $ticket;

        if (
            $ticket['author_id'] !== $_SESSION['id'] &&
            $_SESSION['role'] !== 10 && $_SESSION['role'] !== 50
        ) {
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
            } else {
                require 'views/update.php';
            }
        }
    }

    /** Fonction pour modifier un ticket
     * @param int $id id du ticket à modifier
     */
    public function update($id)
    {
        if (!isset($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'etes pas connecté";
            header('Location: /login');
        }

        if ($_SESSION['role'] == 100) {
            $_SESSION['error'] = "vous n'avez pas l'accès à cette page";
            header('Location: /');
            exit();
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
            $logs = new Log();
            $logs = $logs->custom("INSERT INTO logs (ticket_id, user_id, log_content) VALUES (:ticket_id:,:user_id:,:log_content)", [
                'ticket_id' => $id,
                'user_id' => $_SESSION['id'],
                'log_content' => "Mise à jour du ticket",
            ]);
        }

        header('Location: ' . $_SESSION['previous_url']);
    }

    /** Fonction pour modifier un ticket (technicien)
     * @param int $id id du ticket à modifier
     */
    public function update_technicien($id)
    {
        if (!isset($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'etes pas connecté";
            header('Location: /login');
        }

        if ($_SESSION['role'] == 100) {
            $_SESSION['error'] = "vous n'avez pas l'accès à cette page";
            header('Location: /');
            exit();
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

        if (!isset($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'etes pas connecté";
            header('Location: /login');
        }

        if ($_SESSION['role'] == 100) {
            $_SESSION['error'] = "vous n'avez pas l'accès à cette page";
            header('Location: /');
            exit();
        }

        $ticket = new Ticket();
        $ticket = $ticket->find($id);
        $ticket = (array) $ticket;

        if (
            $ticket['author_id'] !== $_SESSION['id'] &&
            $_SESSION['role'] !== 10 &&
            $_SESSION['role'] !== 50
        ) {
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
        if ($_SESSION['role'] == 100) {
            header('Location: ' . $_SESSION['previous_url']);
            exit();
        }

        $ticket = new Ticket();
        $ticket = $ticket->find($id);
        $ticket = (array) $ticket;

        if ($_POST['response'] === 'yes') {
            if (
                $ticket['author_id'] == $_SESSION['id'] ||
                $_SESSION['role'] == 10 ||
                $_SESSION['role'] == 50
            ) {
                $ticket = new Ticket();
                $ticket->find($id);
                $status = new Status();
                $status_close = 'Fermé';
                $ticket->update([
                    'status_id' => (int) $status->custom("select * from status where sta_name = :name", ['name' => $status_close])[0]['sta_id'],
                    'updater_id' => $_SESSION['id'],
                    'update_date' => date('Y-m-d H:i:s')
                ]);
                $logs = new Log();
                $logs = $logs->custom("INSERT INTO logs (ticket_id, user_id, log_content) VALUES (:ticket_id:,:user_id:,:log_content)", [
                    'ticket_id' => $id,
                    'user_id' => $_SESSION['id'],
                    'log_content' => "Ticket fermé",
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
        if (!isset($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'etes pas connecté";
            header('Location: /login');
        }

        if ($_SESSION['role'] == 100) {
            $_SESSION['error'] = "vous n'avez pas l'accès à cette page";
            header('Location: /');
            exit();
        }

        $ticket = new Ticket();
        $ticket = $ticket->find($id);
        $ticket = (array) $ticket;

        if ($ticket['author_id'] == $_SESSION['id'] ||
            $_SESSION['role'] == 10 ||
            $_SESSION['role'] == 50
        ) {
            $comment = new Comment();
            $comment->create([
                'com_title' => $_POST['title'],
                'com_comment' => $_POST['comment'],
                'com_date' => date('Y-m-d H:i:s'),
                'ticket_id' => $id,
                'user_id' => $_SESSION['id'],
                // TODO: 'reply to' -> à voir si on peut répondre à un commentaire (actuellement tous les commentaires sont des réponses à un ticket)

            ]);
            $logs = new Log();
            $logs = $logs->custom("INSERT INTO logs (ticket_id, user_id, log_content) VALUES (:ticket_id:,:user_id:,:log_content)", [
                'ticket_id' => $id,
                'user_id' => $_SESSION['id'],
                'log_content' => "Nouveau commentaire",
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
        if (!isset($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'etes pas connecté";
            header('Location: /login');
        }

        if ($_SESSION['role'] == 100) {
            $_SESSION['error'] = "vous n'avez pas l'accès à cette page";
            header('Location: /');
            exit();
        }

        $ticket = new Ticket();
        try {

            $ticket = $ticket->find($id);

        } catch (\Exception $e) {
            $_SESSION['error'] = "Ce ticket n'existe pas";
            header('Location: /dashboard');
        }

        $ticket = (array) $ticket;

        if (
            $ticket['author_id'] !== $_SESSION['id'] &&
            $ticket['tech_id'] !== $_SESSION['id'] &&
            ($_SESSION['role'] !== 10 && $_SESSION['role'] !== 50 || $ticket['tech_id'] !== NULL)
        ) {
            $_SESSION['error'] = "vous n'etes pas l'auteur de ce ticket";
            header('Location: /dashboard');
        }


        $comments = new Comment();
        $comments = $comments->find($ticket['tic_id']);

        $view_comments = [];
        foreach ($comments as $comment) {
            $user = new User();
            $user = $user->custom("select use_name, use_firstname from users where use_id = :id", ['id' => $comment['user_id']])[0];
            $comment['user'] = $user;
            $view_comments[] = $comment;
        }
        $comments = $view_comments;

        $status = new Status();
        $status = $status->find($ticket['status_id']);

        $category = new Category();
        $category = $category->find($ticket['category_id']);

        $label = new Label();
        $label = $label->find($ticket['label_id']);

        $priority = new Priority();
        $priority = $priority->find($ticket['priority_id']);


        $users = new User();
        $users = $users->custom("select use_name, use_firstname from users where use_id = :id", ['id' => $ticket['author_id']])[0];

        if ($ticket['tech_id'] != null) {
            $tech = new User();
            $tech = $tech->custom("select use_name, use_firstname from users where use_id = :id", ['id' => $ticket['tech_id']])[0];
        } else {
            $tech = null;
        }

        if ($_SESSION['role'] == 10 || $_SESSION['role'] == 50) {
            $python_exit = shell_exec("python3 /var/www/html/app/ai/predict.py '" . $ticket['tic_description'] . "'");
            $suggestion_category = new Category();
            $suggest = $suggestion_category->custom("select cat_id, cat_name from categories where cat_name = :name", ['name' => $python_exit])[0];
            $suggestion_category = $suggest['cat_name'];
            $suggestion_category_id = $suggest['cat_id'];
            
            if ($suggestion_category == null) {
                $suggestion_category = "Aucune suggestion";
            }
        }

        require 'views/ticket.php';
    }

    /** Fonction pour afficher le formulaire de modification du status d'un ticket
     * @param int $id id du ticket à modifier
     */
    public function update_status_form($id)
    {
        if ($_SESSION['role'] == 100) {
            $_SESSION['error'] = "vous n'avez pas l'accès à cette page";
            header('Location: /');
            exit();
        }

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
        if (!isset($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'etes pas connecté";
            header('Location: /login');
        }

        if ($_SESSION['role'] == 100) {
            $_SESSION['error'] = "vous n'avez pas l'accès à cette page";
            header('Location: /');
            exit();
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
            $logs = new Log();
            $logs = $logs->custom("INSERT INTO logs (ticket_id, user_id, log_content) VALUES (:ticket_id:,:user_id:,:log_content)", [
                'ticket_id' => $id,
                'user_id' => $_SESSION['id'],
                'log_content' => "Mise à jour du statut du ticket",
            ]);
        }

        header('Location: /ticket/' . $id);
    }

    /** Fonction permettant d'afficher la confirmation d'attribution d'un ticket
     *  @param int $id id du ticket à fermer
     */
    public function assignation_form($id)
    {
        if (!isset($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'êtes pas connecté";
            header('Location: /login');
        }

        if ($_SESSION['role'] == 100) {
            $_SESSION['error'] = "vous n'avez pas l'accès à cette page";
            header('Location: /');
            exit();
        }

        $ticket = new Ticket();
        $ticket = $ticket->find($id);
        $ticket = (array) $ticket;

        $user_role_id = Role::getRoleIdByUserId($_SESSION['id']);

        if (
            $user_role_id !== 10 &&
            $user_role_id !== 50
        ) {
            $user_role_id = "vous n'êtes pas un technicien";
            header('Location: /dashboard');
        } else {
            require 'views/assignation.php';
        }
    }

    /** Fonction permettant de s'attribuer un ticket
     *  @param int $id id du ticket à fermer
     */
    public function assignation($id)
    {
        $ticket = new Ticket();
        $ticket = $ticket->find($id);
        $ticket = (array) $ticket;

        if ($_POST['response'] === 'yes') {
            if (
                $_SESSION['role'] == 10 ||
                $_SESSION['role'] == 50
            ) {
                $ticket = new Ticket();
                $ticket->find($id);
                $ticket->update([
                    'tech_id' => $_SESSION['id']
                ]);
                $logs = new Log();
                $logs = $logs->custom("INSERT INTO logs (ticket_id, user_id, log_content) VALUES (:ticket_id:,:user_id:,:log_content)", [
                    'ticket_id' => $id,
                    'user_id' => $_SESSION['id'],
                    'log_content' => "Assignation du ticket",
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
    public function desassignation_form($id)
    {
        if (!isset($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'êtes pas connecté";
            header('Location: /login');
        }

        if ($_SESSION['role'] == 100) {
            $_SESSION['error'] = "vous n'avez pas l'accès à cette page";
            header('Location: /');
            exit();
        }

        $ticket = new Ticket();
        $ticket = $ticket->find($id);
        $ticket = (array) $ticket;

        if (
            $_SESSION['role'] !== 10 &&
            $_SESSION['role'] !== 50
        ) {
            $_SESSION['error'] = "vous n'êtes pas un technicien";
            header('Location: /dashboard');
        } else {
            require 'views/desassignation.php';
        }
    }

    /** Fonction permettant de se désattribuer un ticket
     *  @param int $id id du ticket à fermer
     */
    public function desassignation($id)
    {
        if ($_SESSION['role'] == 100) {
            $_SESSION['error'] = "vous n'avez pas l'accès à cette page";
            header('Location: /');
            exit();
        }

        $ticket = new Ticket();
        $ticket = $ticket->find($id);
        $ticket = (array) $ticket;

        if ($_POST['response'] === 'yes') {
            if (
                $_SESSION['role'] == 10 ||
                $_SESSION['role'] == 50
            ) {
                $ticket = new Ticket();
                $ticket->find($id);
                $ticket->update([
                    'tech_id' => NULL
                ]);
                $logs = new Log();
                $logs = $logs->custom("INSERT INTO logs (ticket_id, user_id, log_content) VALUES (:ticket_id:,:user_id:,:log_content)", [
                    'ticket_id' => $id,
                    'user_id' => $_SESSION['id'],
                    'log_content' => "Desassignation du ticket",
                ]);
            } else {
                $_SESSION['error'] = "vous n'êtes pas un technicien";
            }
        }
        header('Location: /techniciens-dashboard');
    }

    /** Fonction pour accepter la suggestion de catégorie
     * @param int $id id du ticket à modifier
     * @param int $category_id id de la catégorie à attribuer
     */
    public function accept_suggestion($id, $category_id)
    {
        if (!isset($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'etes pas connecté";
            header('Location: /login');
        }

        if ($_SESSION['role'] !== 10 && $_SESSION['role'] !== 50) {
            $_SESSION['error'] = "vous n'êtes pas technicien";
            header('Location: /dashboard');
        }

        $ticket = new Ticket();
        $ticket->find($id);
        $ticket->update([
            'category_id' => $category_id
        ]);

        header('Location: /ticket/' . $id);
    }
}