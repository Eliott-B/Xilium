<?php

namespace app\controllers;

use app\models\User;

class UserController
{

    public function login_form(){
        require 'views/login.php';
    }

    public function login(){
        $user = new User();
        $user = $user->custom('SELECT * FROM users WHERE use_username=:username AND use_password=:password', ['username'=>$_POST['username'], 'password'=>$_POST['psw']]);

        var_dump($user);
//        header('Location: /dashboard');
    }


    public function list_users()
    {
        $users = new User();
        $users = $users->all();

        var_dump($users);
    }

    public function show_user($id)
    {
        $user = new User();
        $user = $user->find($id);

        var_dump($user);
    }

    public function delete($id)
    {
        $user = new User();
        $user = $user->delete($id);

        var_dump($user);
    }

    public function create_form()
    {
        echo "
        <form action='' method='post'>
            <label for='username'>Nom</label>
            <input type='text' name='username' id='username'>
            <input type='submit' value='Ajouter'>
        </form>
        ";
    }

    public function create()
    {
        $user = new User();
        $user->create(['username' => $_POST['username']]);
    }

    public function update_form($id){
        $user = new User();
        $user = $user->find($id);
        echo "
        <form action='./' method='post'>
            <input type='hidden' name='id' value='$id'>
            <label for='username'>Nom</label>
            <input type='text' name='username' id='username' value='" . $user['use_username'] . "'>
            <input type='submit' value='Ajouter'>
        </form>
        ";
    }

    public function update(){
        $user = new User();
        $user = $user->find($_POST['id']);
        var_dump($user);
        $user->update(['use_username' => $_POST['username']]);
    }


}