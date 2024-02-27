<?php
if (isset($router)){
    // $router->get('/', function () {
    //     $tickets = new \app\models\Ticket();
    //     $tickets = $tickets->all();

    //     require 'views/index.php';
    // });

    $router->get('/', 'IndexController#index');

    $router->get('/dashboard', 'DashboardController#index');

    $router->get('/login', 'UserController#login_form');
    $router->post('/login', 'UserController#login');

    $router->get('/register', 'UserController#register_form');
    $router->post('/register', 'UserController#register');

    $router->get('/account', 'UserController#account');
    $router->post('/account', 'UserController#update');
    $router->get('/logout', 'UserController#logout');

    // PAGES STATIQUES
    $router->get('/about', function () {
        require "views/about.php";
    });

    $router->get('/faq', function () {
        require "views/faq.php";
    });

    $router->get('/privacy', function (){
        require 'views/privacy.php';
    });
}
