<?php

namespace App\Controllers;

use App\Models\Book;
use App\Providers\View;

class BookController
{
    public function index()
    {
        $bookModel = new Book();
        $books = $bookModel->getAllBooks();
        return View::render('user/home', ['books' => $books]);
    }

    public function details($id) {
        $bookModel = new Book();
        $book = $bookModel->getBookById($id);

        if ($book) {
            return View::render('user/bookDetails', ['book' => $book]);
        }

        // Si aucun livre n'est trouvé
        http_response_code(404);
        echo "Erreur 404 : Livre introuvable.";
    }
    }
