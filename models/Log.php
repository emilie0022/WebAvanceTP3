<?php

namespace App\Models;

use PDO;

class Log {
    private $db;

    public function __construct() {
        $config = require 'config.php';
        $this->db = new PDO(
            "mysql:host={$config['db']['host']};dbname={$config['db']['dbname']}",
            $config['db']['username'],
            $config['db']['password'],
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    }

    public function createLog($data) {
        $query = "INSERT INTO logs (username, ip_address, action, created_at) VALUES (:username, :ip_address, :action, NOW())";
        $stmt = $this->db->prepare($query);
        return $stmt->execute($data);
    }

    public function getAllLogs() {
        $query = "SELECT * FROM logs ORDER BY created_at DESC";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll();
    }
}
