<?php
namespace App\Providers;

class View {
    public static function render($view, $data = []) {
        extract($data);

        $viewPath = __DIR__ . "/../views/{$view}.php";
        if (file_exists($viewPath)) {
            require $viewPath;
        } else {
            http_response_code(500);
            echo "Erreur 500 : Vue introuvable - {$view}.php";
            exit;
        }
    }

    public static function redirect($url) {
        header("Location: {$url}");
        exit;
    }
}
