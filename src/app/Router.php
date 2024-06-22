<?php

namespace app;

class Router
{
    private string $url;
    private array $routes = [];
    private array $namedRoutes = [];

    /**
     * @param string $url L'url de l'index du serveur
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * Execute la route courante en fonction de l'url
     * @return mixed Le retour de la fonction call
     */
    public function run()
    {
        if (!isset($this->routes[$_SERVER['REQUEST_METHOD']])) {
            throw new RouterException("REQUEST_METHOD n'existe pas !");
        }
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
            if ($route->match($this->url)) {
                Router::manageErrors();
                return $route->call();
            }
        }
        throw new RouterException('Pas de route correspondante !');
    }

    /**
     * Gestion des erreurs
     * @return void
     */
    public function manageErrors(){
        if (!isset($_SESSION['pagechangecounter'])){
            $_SESSION['pagechangecounter'] = 0;
        }
        else {
            if ($_SESSION['error'] != ""){
                $_SESSION['pagechangecounter'] ++;
            }
            if ($_SESSION['pagechangecounter'] > 1){
                $_SESSION['error'] = "";
                $_SESSION['pagechangecounter'] = 0;
            }
        }
    }

    /**
     * Recuperer l'url de la route susnommé
     * @param string $name Le nom de la route
     * @param array $params Les paramètres à passer à l'url
     * @return string La route nommé
     */
    public function url(string $name, array $params = []) : string
    {
        if (!isset($this->namedRoutes[$name])) {
            throw new RouterException('Aucune route ne correspond à ce nom');
        }
        return $this->namedRoutes[$name]->getUrl($params);
    }

    /**
     * Creer une route get
     * @param string $path Le chemin de la route
     * @param callable|string $callable La fonction appelé par la route
     * @param string|null $name Le nom de la route
     * @return Route La route ainsi ajouté
     */
    public function get(string $path, callable|string $callable, string $name = null): Route
    {
        return $this->add($path, $callable, $name, 'GET');
    }

    /**
     * Creer une route post
     * @param string $path Le chemin de la route
     * @param callable|string $callable La fonction appelé par la route
     * @param string|null $name Le nom de la route
     * @return Route La route ainsi ajouté
     */
    public function post(string $path, callable|string $callable, string $name = null): Route
    {
        return $this->add($path, $callable, $name, 'POST');
    }

    /**
     * Creer la route $route et l'enregistre dans la liste des routes
     * @param string $path Le chemin de l'url de la route
     * @param callable|string $callable La fonction appelé par la route
     * @param string|null $name string Nom de la route
     * @param string $method Methode utilisé par la route
     * @return Route La route ainsi créé
     */
    private function add(string $path, callable|string $callable, string|null $name, string $method): Route
    {
        $route = new Route($path, $callable);
        $this->routes[$method][] = $route;
        if (is_string($callable) && $name === null) {
            $name = $callable;
        }
        if ($name) {
            $this->namedRoutes[$name] = $route;
        }
        return $route;
    }
}