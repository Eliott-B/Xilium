<?php
if (isset($router)){
    $router->get('/', function () {
        $tickets = new \app\models\Ticket();
        $tickets = $tickets->all();

        require 'views/index.php';
    });

    $router->get('/login', 'UserController#login_form');
    $router->post('/login', 'UserController#login');



    // /login get post login-form login
    // /register get post register_form
    // /account get
    // /password-forget

}
