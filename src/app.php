<?php
require __DIR__.'\autoload.php';

use app\models\Exemple;


$router = new \app\Router($_GET['url']);

$router->get('/', function () {
    echo "Bonsoir";
});

$router->get('/bonjour', Exemple::texte());

$router->run();

