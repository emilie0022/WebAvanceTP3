<?php

namespace App\Providers;

use App\Models\User;

class Auth {

    public static function check() {
        return isset($_SESSION['user']);
    }

    public static function user() {
        return $_SESSION['user'] ?? null;
    }

    public static function logout() {
        session_destroy();
    }

    public static function login($username, $password) {
        $user = (new User())->checkUser($username, $password);
        if ($user) {
            $_SESSION['user'] = [
                'id' => $user['id'],
                'username' => $user['username'],
                'role' => $user['role']
            ];
            return true;
        }
        return false;
    }
}
