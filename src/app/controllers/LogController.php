<?php

namespace app\controllers;

use app\models\Log;

/**
 * Module du controleur des logs
 */
class LogController
{
    /**
     * Liste les logs
     */
    public function list_logs()
    {
        $logs = new Log();
        $logs = $logs->all();

        var_dump($logs);
    }

    /**
     * Affiche un log
     * @param int $id identifiant du log
     */
    public function show_log($id)
    {
        $log = new Log();
        $log = $log->find($id);

        var_dump($log);
    }

    /**
     * Supprime un log
     * @param int $id identifiant du log
     */
    public function delete($id)
    {
        $log = new Log();
        $log = $log->delete($id);

        var_dump($log);
    }

    // public function create_form()
    // {
    //     echo "
    //     <form action='' method='post'>
    //         <label for='ip'>Nom</label>
    //         <input type='text' name='ip' id='ip'>
    //         <input type='submit' value='Ajouter'>
    //     </form>
    //     ";
    // }

    // public function create()
    // {
    //     $log = new Log();
    //     $log->create(['ip' => $_POST['ip']]);
    // }

    // public function update_form($id){
    //     $log = new Log();
    //     $log = $log->find($id);
    //     echo "
    //     <form action='./' method='post'>
    //         <input type='hidden' name='id' value='$id'>
    //         <label for='ip'>Nom</label>
    //         <input type='text' name='ip' id='ip' value='" . $log['log_ip'] . "'>
    //         <input type='submit' value='Ajouter'>
    //     </form>
    //     ";
    // }

    // public function update(){
    //     $log = new Log();
    //     $log = $log->find($_POST['id']);
    //     var_dump($log);
    //     $log->update(['log_ip' => $_POST['ip']]);
    // }
}