<?php
if (isset($router)){
    $router->get('/', 'IndexController#index');

    $router->get('/dashboard', 'DashboardController#index')->auth();

    $router->get('/techniciens-dashboard', 'TechnicienDashboardController#index')->auth();

    $router->get('/login', 'UserController#login_form');
    $router->post('/login', 'UserController#login');

    $router->get('/register', 'UserController#register_form');
    $router->post('/register', 'UserController#register');

    $router->get('/account', 'UserController#account')->auth();
    $router->post('/account', 'UserController#update')->auth();

    $router->get('/logout', 'UserController#logout')->auth();

    $router->get('/create', 'TicketController#create_form')->auth();
    $router->post('/create', 'TicketController#create')->auth();

    $router->get('/update/{id}', 'TicketController#update_form')->auth();
    $router->post('/update/{id}', 'TicketController#update')->auth();

    $router->get('/update-status/{id}', 'TicketController#update_status_form')->auth();
    $router->post('/update-status/{id}', 'TicketController#update_status')->auth();

    $router->get('/alocation/{id}', 'TicketController#alocation_form')->auth();
    $router->post('/alocation/{id}', 'TicketController#alocation')->auth();

    $router->get('/desalocation/{id}', 'TicketController#desalocation_form')->auth();
    $router->post('/desalocation/{id}', 'TicketController#desalocation')->auth();

    $router->get('/close/{id}', 'TicketController#close_form')->auth();
    $router->post('/close/{id}', 'TicketController#close')->auth();

    $router->post('/comment/{id}', 'TicketController#comment')->auth();

    $router->get('/ticket/{id}', 'TicketController#show')->auth();



    // PAGES STATIQUES
    $router->get('/about', function () {
        require "views/about.php";
    });

    $router->get('/contact', function () {
        require "views/contact.php";
    });

    $router->get('/faq', function () {
        require "views/faq.php";
    });

    $router->get('/privacy', function (){
        require 'views/privacy.php';
    });
}
