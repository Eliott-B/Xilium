<?php
if (isset($router)){

    $router->get('/test/:id/:id2', function ($id, $id2){
        echo "Test numero $id => $id2";
    });





//    $router->get('/labels', 'LabelController#list_labels');
//
//    $router->get('/labels/create', 'LabelController#create_form');
//    $router->post('/labels/create', 'LabelController#create');
//
//    $router->get('/labels/update/{id}', 'LabelController#update_form');
//    $router->post('/labels/update/{id}', 'LabelController#update');
//
//    $router->get('/labels/{id}', 'LabelController#show_label');
//    $router->get('/labels/{id}/delete', 'LabelController#delete');
//
//    // Test Route Comment
//    $router->get('/comments','CommentController#list_comments');
//
//    $router->get('/comment/create', 'CommentController#create_form');
//    $router->post('/comment/create', 'CommentController#create');
//
//    $router->get('/comment/update/:id', 'CommentController#update_form');
//    $router->post('/comment/update', 'CommentController#update');
//
//    $router->get('/comment/show', 'CommentController#show_comment');
//
//    $router->get('/comment/delete/:id', 'CommentController#delete');
//
//
//    // Test Route User
//    $router->get('/users','UserController#list_users');
//
//    $router->get('/user/create', 'UserController#create_form');
//    $router->post('/user/create', 'UserController#create');
//
//    $router->get('/user/update/:id', 'UserController#update_form');
//    $router->post('/user/update', 'UserController#update');
//
//    $router->get('/user/show', 'UserController#show_user');
//
//    $router->get('/user/delete/:id', 'UserController#user');
}
