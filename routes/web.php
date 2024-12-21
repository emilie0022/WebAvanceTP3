<?php

return [
    '/' => [App\Controllers\BookController::class, 'index'],
    '/auth/login' => [App\Controllers\AuthController::class, 'index'],
    '/auth/store' => [App\Controllers\AuthController::class, 'store'],
    '/auth/logout' => [App\Controllers\AuthController::class, 'delete'],
    '/admin/dashboard' => [App\Controllers\AdminController::class, 'dashboard'],
    '/admin/addBook' => [App\Controllers\AdminController::class, 'addBookForm'],
    '/admin/storeBook' => [App\Controllers\AdminController::class, 'storeBook'],
    '/books/details/{id}' => [App\Controllers\BookController::class, 'details'],
    '/admin/uploadImage' => [App\Controllers\AdminController::class, 'uploadImage'],
    '/auth/login' => [App\Controllers\AuthController::class, 'index'],
    '/auth/store' => [App\Controllers\AuthController::class, 'store'],
    '/auth/logout' => [App\Controllers\AuthController::class, 'delete'],

];

