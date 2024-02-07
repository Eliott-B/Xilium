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
     * Exécuter la route courante
     * @return mixed Le retour de la fonction call
     */
    public function run()
    {
        if (!isset($this->routes[$_SERVER['REQUEST_METHOD']])) {
            throw new RouterException("REQUEST_METHOD n'existe pas !");
        }
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
            if ($route->match($this->url)) {
                return $route->call();
            }
        }
        throw new RouterException('Pas de route correspondante !');
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
     * Avoir une route get notamment pour les vues
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
     * Avoir une route post notamment pour les formulaires
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
     * Creer une route et lui attribuer ses paramètres
     * @param $path string Le chemin de l'url de la route
     * @param $callable callable|string La fonction appelé par la route
     * @param string|null $name string Nom de la route
     * @param $method string Methode utilisé par la route
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