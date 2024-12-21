<?php

namespace App\Controllers;

use App\Models\User;
use App\Providers\View;

class AuthController {
    public function index() {
        return View::render('auth/login');
    }

    public function store($data) {
        $userModel = new User();
        $user = $userModel->checkUser($data['username'], $data['password']);

        if ($user) {
            $_SESSION['user'] = [
                'id' => $user['id'],
                'username' => $user['username'],
                'role' => $user['role'], // admin ou user
            ];
            return View::redirect('/');
        }

        return View::render('auth/login', ['error' => 'Identifiants incorrects']);
    }

    public function delete() {
        session_destroy();
        return View::redirect('/');
    }
}
