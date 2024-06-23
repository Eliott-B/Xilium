<?php

namespace app\controllers;

use app\Hash;
use app\models\User;

class AdminController
{
    /**
     * Affiche la liste des utilisateurs
     */
    public function list()
    {
        $user = new User();
        $users = $user->all();

        // todo : appelle la vue
    }

    /**
     * Redirige vers la page de creation de compte technicien
     */
    public function create_form()
    {

        // todo :  appelle la vue
    }

    /**
     * Enregistre l'utilisateur à partir des informations du formulaire
     */
    public function create()
    {
        if ($_POST['psw'] == $_POST['psw-repeat']) {


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
                                'role_id' => $_POST['role']
                            ]);

                            header('Location: /dashboard');
                        } else {
                            $_SESSION['error'] = "Longueur du prenom incorrecte";
                            header('Location: /admin/users/create');
                        }
                    } else {
                        $_SESSION['error'] = "Longueur du nom de famille incorrecte";
                        header('Location: /admin/users/create');
                    }
                } else {
                    $_SESSION['error'] = "Longueur du mot de passe incorrecte";
                    header('Location: /admin/users/create');
                }
            } else {
                $_SESSION['error'] = "Longueur du nom d'utilisateur incorrecte";
                header('Location: /admin/users/create');
            }


        }

        header('Location: /admin/users/list');

    }

    public function update_form($id){
        $user = new User();
        $user = $user->find($id);
        // todo : require la vue
    }

    /**
     * Met à jour les infos de l'utilisateur à partir des informations du formulaire
     */
    public function update($id)
    {
        $user = new User();
        $user = $user->find($id);

        if ($_POST['psw'] == $_POST['psw-repeat']) {
            if ($user['use_password'] == Hash::rc4($_POST['old-psw'])) {
                $user = new User();
                $user->find($_SESSION['id']);
                $user->update([
                    'use_username' => $_POST['username'],
                    'use_password' => Hash::rc4($_POST['psw']),
                    'use_name' => $_POST['lname'],
                    'use_firstname' => $_POST['fname'],
                    'role_id' => $_POST['role']
                ]);
            } else {
                $_SESSION['error'] = "Le mot de passe entré est incorrect";
                header('Location: /admin/users/update/' . $id);
            }

        } else {
            $_SESSION['error'] = "Les deux mots de passe ne correpondent pas";

            header('Location: /admin/users/update/' . $id);
        }

        $_SESSION['success'] = "Utilisateur modifié avec succès";
        header('Location: /admin/users/list');
    }

    /**
     * Supprime un utilisateur
     * @param int $id identifiant de l'utilisateur
     */
    public function delete($id)
    {
        $user = new User();
        $user = $user->delete($id);

        header('Location: /admin/users/list');
    }

}