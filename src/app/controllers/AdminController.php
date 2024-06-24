<?php

namespace app\controllers;

use app\Hash;
use app\models\User;
use app\models\Role;

class AdminController
{

    public function index()
    {
        require 'views/adminweb.php';
    }
    /**
     * Affiche la liste des utilisateurs
     */
    public function list()
    {
        $user = new User();
        $users = $user->custom("select * from users order by role_id", []);
        $role = new Role();
        $roles = $role->all();
        require 'views/adminweb_users.php';
    }

    /**
     * Redirige vers la page de creation de compte technicien
     */
    public function create_form()
    {

        $role = new Role();
        $roles = $role->all();
        require 'views/adminweb_users_create.php';
    }

    /**
     * Enregistre l'utilisateur à partir des informations du formulaire
     */
    public function create()
    {
        if ($_POST['use_password'] == $_POST['use_password_confirm']) {
            $username = $_POST['use_username'];
            $password = $_POST['use_password'];
            $lastname = $_POST['use_name'];
            $firstname = $_POST['use_firstname'];

            if (strlen($username) > 3 && strlen($username) < 50) {
                if (strlen($password) > 8) {
                    if (strlen($firstname) > 2 && strlen($firstname) < 50) {
                        if (strlen($lastname) > 2 && strlen($lastname) < 50) {

                            $users = new User();
                            $users = $users->custom("select * from users where use_username = :username", ['username' => $username]);
                            if (count($users) == 0) {
                                $user = new User();
                                $user->create([
                                    'use_username' => $username,
                                    'use_password' => Hash::rc4($password),
                                    'use_name' => $lastname,
                                    'use_firstname' => $firstname,
                                    'role_id' => $_POST['role_id']
                                ]);
                                $_SESSION['success'] = "Utilisateur créé avec succès";

                            } else {
                                $_SESSION['error'] = "Nom d'utilisateur déjà utilisé";
                            }
                            
                        } else {
                            $_SESSION['error'] = "Longueur du prenom incorrecte";
                        }
                    } else {
                        $_SESSION['error'] = "Longueur du nom de famille incorrecte";
                    }
                } else {
                    $_SESSION['error'] = "Longueur du mot de passe incorrecte";
                }
            } else {
                $_SESSION['error'] = "Longueur du nom d'utilisateur incorrecte";
            }
        } else {
            $_SESSION['error'] = "Les mots de passe ne correspondent pas";
        }

        $location = (isset($_SESSION['error'])) ? '/admin/users/create' : '/admin/users';
        header('Location: ' . $location);
    }

    public function update_form($id){
        $user = new User();
        $user = $user->find($id);
        $role = new Role();
        $roles = $role->all();
        require 'views/adminweb_users_update.php';
    }

    /**
     * Met à jour les infos de l'utilisateur à partir des informations du formulaire
     */
    public function update($id)
    {
        $user = new User();
        $user = (array) $user->find($id);

        $updatables = [
            'use_username' => $_POST['use_username'],
            'use_name' => $_POST['use_name'],
            'use_firstname' => $_POST['use_firstname'],
            'role_id' => $_POST['role_id']
        ];

        $adminuser = new User();
        $adminuser = (array) $adminuser->find($_SESSION['id']);


        if ($adminuser['role_id'] < $user['role_id']) {
            $_SESSION['error'] = "Vous n'avez pas les droits pour effectuer cette action";
            header('Location: /admin/users');
        } else {
            foreach ($updatables as $key => $value) {
                if ($value == null) {
                    unset($updatables[$key]);
                }
            }
            $user = new User();
            $user->find($id);
            $user->update($updatables);
    
            $_SESSION['success'] = "Utilisateur modifié avec succès";
            header('Location: /admin/users');
        }

    }

    /**
     * Supprime un utilisateur
     * @param int $id identifiant de l'utilisateur
     */
    public function delete($id)
    {


        $user = new User();
        $user = (array) $user->find($id);
        $adminuser = new User();
        $adminuser = (array) $adminuser->find($_SESSION['id']);

        if ($adminuser['role_id'] < $user['role_id'] || $adminuser['use_id'] == $user['use_id']) {
            $_SESSION['error'] = "Vous n'avez pas les droits pour effectuer cette action";
        } else {
            $user = new User();
            $user = $user->delete($id);
        }

        header('Location: /admin/users');
    }

}