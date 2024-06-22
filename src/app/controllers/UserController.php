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
            ['username' => $_POST['username']]
        );

        if (count($user) == 0) {
            $_SESSION['error'] = "Cet utilisateur n'existe pas.";
            header('Location: /login');
            return;
        }

        if ($user[0]['use_password'] == Hash::rc4($_POST['psw'])) {
            $_SESSION['id'] = $user[0]['use_id'];
            $_SESSION['role'] = $user[0]['role_id'];

            if (isset($_SESSION['id'])) {
                if ($_SESSION['role'] == 1) {
                    header('Location: /dashboard');
                    return;
                } else {
                    header('Location: /techniciens-dashboard');
                    return;
                }
            } else {
                $_SESSION['error'] = "Erreur lors de la connexion";
                header('Location: /login');
                return;
            }

        } else {
            $_SESSION['error'] = "Mot de passe incorrect.";
            header('Location: /login');
            return;
        }

    }

    /**
     * Redirige vers la page du compte de l'utilisateur
     * Redirige vers la page de connexion si l'utilisateur n'est pas connecté
     */
    public function account()
    {
        $user = new User();
        $user = (array) $user->find($_SESSION['id']);
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
            $v1 = rand(1, 10);
            $v2 = rand(1, 10);
            $v3 = rand(1, 10);

            $signe = rand(0, 1);

            $expr = "$v1 * $v2 " . ($signe ? "-" : "+") . " $v3";
            $expr_res = $signe ? ($v1 * $v2) - $v3 : ($v1 * $v2) + $v3;

            $_SESSION['expr_res'] = $expr_res;

            require 'views/register.php';
        }
    }

    /**
     * Enregistre l'utilisateur à partir des informations du formulaire
     */
    public function register()
    {
        if ($_POST['psw'] == $_POST['psw-repeat']) {

            if ($_POST['captcha'] == $_SESSION['expr_res']) {

                $username = $_POST['username'];
                $password = $_POST['psw'];
                $lastname = $_POST['lname'];
                $firstname = $_POST['fname'];

                if (strlen($username) > 3 && strlen($username) < 50) {
                    if (strlen($password) > 8) {
                        if (strlen($firstname) > 2 && strlen($firstname) < 50) {
                            if (strlen($lastname) > 2 && strlen($lastname) < 50) {
                                // enregistrer l'utilisateur dans la base
                                $user = new User();
                                $user->create([
                                    'use_username' => $username,
                                    'use_password' => Hash::rc4($password),
                                    'use_name' => $lastname,
                                    'use_firstname' => $firstname,
                                    'role_id' => 1
                                ]);

                                header('Location: /dashboard');
                            } else {
                                $_SESSION['error'] = "Longueur du prenom incorrecte";
                                header('Location: /register');
                            }
                        } else {
                            $_SESSION['error'] = "Longueur du nom de famille incorrecte";
                            header('Location: /register');
                        }
                    } else {
                        $_SESSION['error'] = "Longueur du mot de passe incorrecte";
                        header('Location: /register');
                    }
                } else {
                    $_SESSION['error'] = "Longueur du nom d'utilisateur incorrecte";
                    header('Location: /register');
                }

            } else {
                $_SESSION['error'] = "Captcha invalide";
                header('Location: /register');
            }
        }
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

        } else {
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
            unset($_SESSION['role']);
            header('Location: /');
        }
    }
}