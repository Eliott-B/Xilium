<?php
if (isset($router)){
    $router->get('/', function () {
        $tickets = new \app\models\Ticket();
        $tickets = $tickets->all();

        require 'views/index.php';
    });

    $router->get('/dashboard', function (){
        if (!isset($_SESSION['id'])) {
            header('Location: /login');

        }
        else {
            $tickets = new \app\models\Ticket();
            $tickets = $tickets->all();

            require 'views/dashboard.php';
        }

    });

    $router->get('/login', 'UserController#login_form');
    $router->post('/login', 'UserController#login');

    $router->get('/register', 'UserController#register_form');
    $router->post('/register', 'UserController#register');

    $router->get('/account', 'UserController#account');
}
