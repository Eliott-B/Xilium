<?php
session_start();

require __DIR__.'/autoload.php';


$instance = \app\Database::getInstance();
$db = $instance->getDb();
$router = new \app\Router($_SERVER['REQUEST_URI']);


require __DIR__ . '/routes/web.php';


require __DIR__ . '/routes/route_test.php';

// Dernier élément
$router->run();

