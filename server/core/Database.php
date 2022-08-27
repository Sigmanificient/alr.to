<?php

namespace alr\core;

use PDO;

class Database
{
    private PDO $conn;

    public function __construct()
    {
        Dotenv::load(ROOT_PATH. '/.env');

        $dsn = (
            'mysql:host=' . getenv('DB_HOST')
            . ';dbport=' . getenv('DB_PORT')
            . ';dbname=' . getenv('DB_NAME')
            . ';charset=utf8'
        );

        $this->conn = new PDO(
            $dsn,
            getenv('DB_USER'),
            getenv('DB_PASSWORD')
        );
    }

    public function query(string $sql) {
        return $this->conn->query($sql, PDO::FETCH_ASSOC);
    }
}