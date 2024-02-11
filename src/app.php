<?php
require __DIR__.'\autoload.php';

use app\models\Exemple;


$router = new \app\Router($_SERVER['REQUEST_URI']);

$router->get('/', function () {
    echo "Bonsoir";
});

$router->get('/test/:id/:id2', function ($id, $id2){
    echo "Test numero $id => $id2";
});

$router->get('/bonjour', 'Exemple#bonjour');

$router->get('/tab', 'Exemple#form');
$router->post('/tab', 'Exemple#update');

$router->run();

