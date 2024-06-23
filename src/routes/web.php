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

    $router->get('/assignation/{id}', 'TicketController#assignation_form')->auth();
    $router->post('/assignation/{id}', 'TicketController#assignation')->auth();

    $router->get('/desassignation/{id}', 'TicketController#desassignation_form')->auth();
    $router->post('/desassignation/{id}', 'TicketController#desassignation')->auth();

    $router->get('/close/{id}', 'TicketController#close_form')->auth();
    $router->post('/close/{id}', 'TicketController#close')->auth();

    $router->post('/comment/{id}', 'TicketController#comment')->auth();

    $router->get('/ticket/{id}', 'TicketController#show')->auth();

    $router->get('/admin/labels/list', 'LabelController#list')->auth();

    $router->get('/admin/labels/add', 'LabelController#create_form')->auth();
    $router->post('/admin/labels/add', 'LabelController#create')->auth();

    $router->get('/admin/labels/update/{id}', 'LabelController#update_form')->auth();
    $router->post('/admin/labels/update/{id}', 'LabelController#update')->auth();

    $router->get('/admin/labels/delete/{id}', 'LabelController#delete')->auth();

    $router->get('/admin/categories/list', 'CategoryController#list')->auth();

    $router->get('/admin/categories/add', 'CategoryController#create_form')->auth();
    $router->post('/admin/categories/add', 'CategoryController#create')->auth();

    $router->get('/admin/categories/update/{id}', 'CategoryController#update_form')->auth();
    $router->post('/admin/categories/update/{id}', 'CategoryController#update')->auth();

    $router->get('/admin/categories/delete/{id}', 'CategoryController#delete')->auth();

    $router->get('/admin/users/list', 'AdminController#list')->auth();

    $router->get('/admin/users/create', 'AdminController#create_form')->auth();
    $router->post('/admin/users/create', 'AdminController#create')->auth();

    $router->get('/admin/users/update/{id}', 'AdminController#update_form')->auth();
    $router->post('/admin/users/update/{id}', 'AdminController#update')->auth();

    $router->get('/admin/users/delete/{id}', 'AdminController#delete')->auth();





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
        header('Location: 404');
    });

    $router->get('/terms', function (){
        header('Location: 404');
    });


    $router->get('/404', function (){
        require 'views/404.php';
    });
}
