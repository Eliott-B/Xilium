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

        $files = scandir(__DIR__."/../../data");
        $files = array_diff($files, ['.', '..', 'log_template.xml']);
        $files = array_reverse($files);

        $filename = __DIR__."/../../data/".$files[0];
        $xml = simplexml_load_file($filename);
        $logs_text = "";
        foreach ($xml->log as $log) {
            if (strpos($log->log_content, "Tentative de connexion") !== false) {
                $logs_text .= "<p style='color:red'>".$log->log_content." - ".$log->log_date." - ".$log->log_ip." - ".$log->ticket_id." - ".$log->user_id."</p>";
            }
            else {
                $logs_text .= "<p>".$log->log_content." - ".$log->log_date." - ".$log->log_ip." - ".$log->ticket_id." - ".$log->user_id."</p>";
            }
        }

        require 'views/system_dashboard.php';
    }

    /**
     * Intègre les informations du tableau de bord dans la vue avec le fichier sélectionné
     * Renvoi vers la page de connexion si l'utilisateur n'est pas connecté
     */
    public function read_file()
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

        $files = scandir(__DIR__."/../../data");
        $files = array_diff($files, ['.', '..', 'log_template.xml']);

        if (in_array($_POST['fileSelect'], $files) === false) {
            $_SESSION['error'] = "Fichier introuvable";
            header('Location: /system-dashboard');
            exit();
        }
        $filename = __DIR__."/../../data/".$_POST['fileSelect'];
        $xml = simplexml_load_file($filename);
        $logs_text = "";
        foreach ($xml->log as $log) {
            if (strpos($log->log_content, "Tentative de connexion") !== false) {
                $logs_text .= "<p style='color:red'>".$log->log_content." - ".$log->log_date." - ".$log->log_ip." - ".$log->ticket_id." - ".$log->user_id."</p>";
            }
            else {
                $logs_text .= "<p>".$log->log_content." - ".$log->log_date." - ".$log->log_ip." - ".$log->ticket_id." - ".$log->user_id."</p>";
            }
        }

        require 'views/system_dashboard.php';
    }
}