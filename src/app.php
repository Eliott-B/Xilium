<?php
require __DIR__.'\autoload.php';

use app\models\Exemple;

$db = new \app\Database("../config/bdd.json");
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


$router->run();

