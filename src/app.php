<?php
require __DIR__.'\autoload.php';

use app\models\Exemple;

$instance = \app\Database::getInstance();
$db = $instance->getDb();
$router = new \app\Router($_SERVER['REQUEST_URI']);


$router->get('/', function () {
    echo "Bonsoir";
});

$router->get('/test/:id/:id2', function ($id, $id2){
    echo "Test numero $id => $id2";
});

$router->get('/bonjour', 'ExempleController#bonjour');

$router->get('/tab', 'ExempleController#form');
$router->post('/tab', 'ExempleController#update');

$router->get('/labels', 'LabelController#list_labels');

$router->get('/labels/create', 'LabelController#create_form');
$router->post('/labels/create', 'LabelController#create');

$router->get('/labels/update/:id', 'LabelController#update_form');
$router->post('/labels/update', 'LabelController#update');

$router->get('/labels/:id', 'LabelController#show_label');
$router->get('/labels/:id/delete', 'LabelController#delete');



// Dernier élément
$router->run();

