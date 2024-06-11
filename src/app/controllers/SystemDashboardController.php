<?php

namespace app\controllers;

use app\models\Log;

/**
 * Module du controleur du tableau de bord des administrateurs systèmes
 */
class SystemDashboardController
{
    /**
     * Intègre les informations du tableau de bord dans la vue
     * Renvoi vers la page de connexion si l'utilisateur n'est pas connecté
     */
    public function index()
    {
        if (!isset($_SESSION['id'])) {
            header('Location: /login');
            exit();
        }

        if ($_SESSION['role'] != 100) {
            $_SESSION['error'] = "vous n'avez pas l'accès à cette page";
            header('Location: /');
            exit();
        }

        // $logs = new Log();
        // $logs = $logs->all();

        require 'views/system_dashboard.php';
    }
}