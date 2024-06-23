<?php
session_start();

require __DIR__.'/autoload.php';


$instance = \app\Database::getInstance();
$db = $instance->getDb();
$router = new \app\Router($_SERVER['REQUEST_URI']);


require __DIR__ . '/routes/web.php';


// Dernier élément
try {
    $router->run();
} catch (\app\RouterException $e) {
    $e->redirect();
}

