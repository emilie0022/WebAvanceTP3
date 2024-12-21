<?php

namespace App\Controllers;

use App\Models\Book;
use App\Providers\View;

class AdminController {
    public function dashboard() {
        $books = (new Book())->getAllBooks();
        return View::render('admin/dashboard', ['books' => $books]);
    }

    public function addBookForm() {
        return View::render('admin/addBook');
    }

    public function storeBook($data) {
        (new Book())->createBook($data);
        return View::redirect('/admin/dashboard');
    }
    public function uploadImage($data) {
    if (!empty($_FILES['image']['name'])) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            return View::redirect('/admin/dashboard');
        } else {
            $errors['message'] = "Erreur lors du téléversement de l'image.";
            return View::render('admin/uploadImage', ['errors' => $errors]);
        }
    }
}

}
