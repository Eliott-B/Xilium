<?php

namespace app\controllers;

use app\Hash;
use app\models\Role;
use app\models\User;

/**
 * Module du controleur des utilisateurs
 */
class UserController
{
    /**
     * Redirige vers la page de connexion
     */
    public function login_form()
    {
        if (isset($_SESSION['id'])) {
            $_SESSION['error'] = "Vous êtes déjà connecté";
            header('Location: /');
        } else {
            require 'views/login.php';
        }
    }

    /**
     * Connecte l'utilisateur
     */
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
            $_SESSION['error'] = "Nom d'utilisateur ou mot de passe incorrecte";
            header('Location: /login');
        }

    }

    /**
     * Redirige vers la page du compte de l'utilisateur
     * Redirige vers la page de connexion si l'utilisateur n'est pas connecté
     */
    public function account()
    {

        $user = new User();
        $user = $user->find($_SESSION['id']);
        $role = new Role();
        $role = $role->find($user['role_id']);

        require 'views/account.php';

    }

    /**
     * Redirige vers la page d'inscription
     */
    public function register_form()
    {
        if (isset($_SESSION['id'])) {
            $_SESSION['error'] = "Vous êtes déjà connecté";
            header('Location: /');
        } else {
            require 'views/register.php';
        }
    }

    /**
     * Enregistre l'utilisateur à partir des informations du formulaire
     */
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

    /**
     * Met à jour le mot de passe de l'utilisateur à partir des informations du formulaire
     */
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
                $_SESSION['error'] = "Le mot de passe entré est incorrect";
                header('Location: /account');
            }

        } else{
            $_SESSION['error'] = "Les deux mots de passe ne correpondent pas";

            header('Location: /account');
        }

        header('Location: /account');
    }

    /**
     * Déconnecte l'utilisateur et le redirige vers la page d'accueil
     */
    public function logout()
    {
        if (!isset($_SESSION['id'])) {
            $_SESSION['error'] = "Vous n'êtes pas connecté";
            header('Location: /');
        } else {
            unset($_SESSION['id']);
            header('Location: /');
        }
    }
}