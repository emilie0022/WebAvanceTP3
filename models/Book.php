<?php

namespace App\Models;

use PDO;

class Book {
    private $db;

    public function __construct() {
        $config = require 'config.php';
        $this->db = new PDO(
            "mysql:host=localhost;dbname=librairie;charset=utf8mb4",
            "root", 
            "",     
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );

    }

    public function getAllBooks() {
        $query = "SELECT * FROM books";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll();
    }

    public function getBookById($id) {
        $query = "SELECT * FROM books WHERE id = :id";
        $stmt = $this->db->prepare($query);


        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    
}
