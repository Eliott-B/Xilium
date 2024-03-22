<?php

namespace app;

class Route
{
    private string $path;
    private mixed $callable;
    private array $matches = [];
    private array $params = [];
    /**
     * @var true
     */
    private bool $needAuth;

    /**
     * @param string $path Le chemin de la route
     * @param string $callable Le nom de la fonction
     */
    public function __construct($path, $callable)
    {
        $this->path = trim($path, '/');
        $this->callable = $callable;
    }

    /**
     * Compare le chemin actuel de l'url avec le chemin de la route this
     * @param $url L'url actuel dans la barre de navigation
     * @return bool Le chemin de la route correspond à l'url
     */
    public function match($url)
    {
        $url = trim($url, '/');
        // Appelle la fonction paramMatch au lieu de directement remplacer
        $path = preg_replace_callback('#\{([\w]+)}#', [$this, 'paramMatch'], $this->path);
        $regex = "#^$path$#i";
        if (!preg_match($regex, $url, $matches)) {
            return false;
        }
        array_shift($matches);
        $this->matches = $matches;
        return true;
    }

    /**
     * Pour entourer les paramètres de l'url avec des parenthèse pour correspondre au traitement de nos expressions
     * @param string $match La route this
     * @return string L'expression régulière
     */
    private function paramMatch($match) : string
    {
        if (isset($this->params[$match[1]])) {
            return '(' . $this->params[$match[1]] . ')';
        }
        return '([^/]+)';
    }

    /**
     * Générer une url avec des paramètres
     * @param $params
     * @return array|string|string[]
     */
    public function getUrl($params)
    {
        $path = $this->path;
        foreach ($params as $k => $v) {
            $path = str_replace(":$k", $v, $path);
        }
        return $path;
    }

    /**
     * Appelle la route et exécution de la fonction anonyme/fonction du controller passé en argument de la route
     * @return mixed Le résultat de la fonction
     */
    public function call()
    {
        if(isset($this->needAuth) && $this->needAuth) {
            if (!isset($_SESSION['id'])){
                $_SESSION['error'] = "Vous devez être connecté";
                header('Location: /login');
            }
        }
        if (is_string($this->callable)) {
            $params = explode('#', $this->callable);
            $controller = "app\\controllers\\" . $params[0];
            $controller = new $controller();
            return call_user_func_array([$controller, $params[1]], $this->matches);
        } else {
            return call_user_func_array($this->callable, $this->matches);
        }
    }

    /**
     * Permet d'ajouter une expression reguliere à la route pour le parametre $param
     * @param $param :les paramètres
     * @param $regex l'expression régulière
     * @return $this La route
     */
    public function with($param, $regex)
    {
        $final = $regex;
        $final = str_replace('(', '(?{', $final);
        $final = str_replace(')', '})?', $final);
        $this->params[$param] = $final;
        return $this;
    }

    public function auth(){
        $this->needAuth = true;

        return $this;
    }
}