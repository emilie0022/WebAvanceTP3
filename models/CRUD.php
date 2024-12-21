<?php

namespace App\Models;

use PDO;

class CRUD {

    private $db;

    public function __construct() {
        $this->db = new PDO(
            'mysql:host=localhost;dbname=librairie;charset=utf8mb4',
            'root',
            '',
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_PERSISTENT => true,
            ]
        );
    }

    public function create($table, $data) {
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));
        $query = "INSERT INTO {$table} ({$columns}) VALUES ({$placeholders})";

        $stmt = $this->db->prepare($query);
        return $stmt->execute($data);
    }

    public function read($table, $conditions = []) {
        $query = "SELECT * FROM {$table}";
        if (!empty($conditions)) {
            $where = implode(" AND ", array_map(fn($key) => "{$key} = :{$key}", array_keys($conditions)));
            $query .= " WHERE {$where}";
        }

        $stmt = $this->db->prepare($query);
        $stmt->execute($conditions);
        return $stmt->fetchAll();
    }

    public function update($table, $data, $conditions) {
        $set = implode(", ", array_map(fn($key) => "{$key} = :{$key}", array_keys($data)));
        $where = implode(" AND ", array_map(fn($key) => "{$key} = :{$key}", array_keys($conditions)));
        $query = "UPDATE {$table} SET {$set} WHERE {$where}";

        $stmt = $this->db->prepare($query);
        return $stmt->execute(array_merge($data, $conditions));
    }

    public function delete($table, $conditions) {
        $where = implode(" AND ", array_map(fn($key) => "{$key} = :{$key}", array_keys($conditions)));
        $query = "DELETE FROM {$table} WHERE {$where}";

        $stmt = $this->db->prepare($query);
        return $stmt->execute($conditions);
    }
}
