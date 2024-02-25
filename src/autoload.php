<?php

/**
 * @param $class
 * @return void
 */
function psr4_autoloader($class)
{
    // On remplace le separateur de namespace (\) par le separateur de fichier lambda (/)
    $class_path = str_replace('\\', '/', $class);

    $file = __DIR__ . '/' . $class_path . '.php';

    // Si le fichier existe on le require
    if (file_exists($file)) {
        require $file; // Ne pas mettre require_once car prends des ressources.
    }
}

spl_autoload_register('psr4_autoloader');

//function fqcn_to_path(string $fqcn)
//{
//    return str_replace('\\', '/', $fqcn) . '.php';
//}
//
//spl_autoload_register(function (string $class) {
//    $path = fqcn_to_path($class);
//
//    require __DIR__ . '/' . $path;
//});

