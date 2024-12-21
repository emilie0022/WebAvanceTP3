<?php

namespace App\Routes;

class Route
{
    private static $routes = [];

    public static function get($uri, $action)
    {
        self::$routes['GET'][$uri] = $action;
    }

    public static function post($uri, $action)
    {
        self::$routes['POST'][$uri] = $action;
    }

    public static function dispatch($uri, $method){
        foreach (self::$routes[$method] as $route => $action) {
            $pattern = preg_replace('#\{[a-zA-Z_]+\}#', '([^/]+)', $route);
            if (preg_match("#^$pattern$#", $uri, $matches)) {
                array_shift($matches); // Supprime le chemin complet des correspondances
                return self::executeAction($action, $matches);
            }
        }

        http_response_code(404);
        echo "Erreur 404 : Route non trouvée.";
    }

    private static function executeAction($action, $parameters = []){
        list($controller, $method) = explode('@', $action);
        $controllerClass = "App\\Controllers\\$controller";

        if (class_exists($controllerClass) && method_exists($controllerClass, $method)) {
            $instance = new $controllerClass();
            call_user_func_array([$instance, $method], $parameters);
        } else {
            http_response_code(500);
            echo "Erreur 500 : Contrôleur ou méthode introuvable.";
        }
    }

}
