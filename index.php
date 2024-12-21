<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Le reste de votre code

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'vendor/autoload.php';
require_once 'config.php';

$routes = require_once 'routes/web.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$basePath = '/webAvance/tp3';
$uri = substr($uri, strlen($basePath));
$uri = rtrim($uri, '/') ?: '/';

$routeFound = false;

foreach ($routes as $route => $handler) {
    $pattern = preg_replace('/\{[a-zA-Z0-9_]+\}/', '([^/]+)', $route);
    if (preg_match("#^{$pattern}$#", $uri, $matches)) {
        $routeFound = true;
        array_shift($matches);
        [$controller, $method] = $handler;

            if (class_exists($controller) && method_exists($controller, $method)) {
            $instance = new $controller();


            $data = ($_SERVER['REQUEST_METHOD'] === 'POST') ? $_POST : [];
            call_user_func_array([$instance, $method], [$data]);
        } else {
            http_response_code(404);
            echo "Erreur 404 : Contrôleur ou méthode introuvable.";
        }

        break;
    }
}

if (!$routeFound) {
    http_response_code(404);
    echo "Erreur 404 : Route non trouvée.";
}
