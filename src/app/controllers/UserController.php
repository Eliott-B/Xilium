<?php

namespace app\controllers;

use app\Hash;
use app\models\Role;
use app\models\User;

class UserController
{

    public function login_form()
    {
        require 'views/login.php';
    }

    public function login()
    {
        $user = new User();
        $user = $user->custom(
            'SELECT * FROM users WHERE use_username=:username',
            ['username' => $_POST['username']]);

        if ($user[0]['use_password'] == Hash::rc4($_POST['psw'])) {
            $_SESSION['id'] = $user[0]['use_id'];


            if (isset($_SESSION['id'])) {
                header('Location: /dashboard');
            } else {
                $_SESSION['error'] = "Erreur lors de la connexion";
                header('Location: /login');
            }
        } else
        {
            $_SESSION['error'] = "nom d'utilisateur ou mot de passe incorrecte";
            header('Location: /login');
        }

    }

    public function account()
    {
        if (!isset($_SESSION['id'])) {
            $_SESSION['error'] = "vous n'etes pas connecté";
            header('Location: /login');

        } else {
            $user = new User();
            $user = $user->find($_SESSION['id']);
            $role = new Role();
            $role = $role->find($user['role_id']);

            require 'views/account.php';
        }

    }


    public function register_form()
    {
        require 'views/register.php';
    }

    public function register()
    {
        // enregistrer l'utilisateur dans la base
        $user = new User();
        $user->create([
            'use_username' => $_POST['username'],
            'use_password' => Hash::rc4($_POST['psw']),
            'use_name' => $_POST['lname'],
            'use_firstname' => $_POST['fname'],
            'role_id' => 1
        ]);

        header('Location: /dashboard');
    }

    public function update()
    {
        $user = new User();
        $user = $user->find($_SESSION['id']);

        if ($_POST['psw'] == $_POST['psw-repeat']) {
            if ($user['use_password'] == Hash::rc4($_POST['old-psw'])) {
                $user = new User();
                $user->find($_SESSION['id']);
                $user->update([
                    'use_password' => Hash::rc4($_POST['psw'])
                ]);
            } else {
                $_SESSION['error'] = "le mot de passe entré est incorrect";
                header('Location: /account');
            }
        } else{
            $_SESSION['error'] = "les deux mdp ne correpondent pas";
            header('Location: /account');
        }

        header('Location: /account');
    }

    public function logout()
    {
        unset($_SESSION['id']);
        header('Location: /');
    }
}