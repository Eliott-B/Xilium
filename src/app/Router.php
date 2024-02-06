<?php

namespace app;

class Router
{
    private $url;
    private $routes = [];

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function run(){
        if(!isset($this->routes[$_SERVER['REQUEST_METHOD']])){
            throw new RouterException("REQUEST_METHOD n'existe pas !");
        }
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route){
            if($route->match($this->url)){
                return $route->call;
            }
        }
        throw new RouterException('Pas de route correspondante !');
    }

    public function get($path, $callable){
        $route = new Route($path, $callable);
        $this->routes['GET'][] = $route;
        return $route;
    }
}