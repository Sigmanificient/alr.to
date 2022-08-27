<?php

use alr\core\Database;

class User
{
    public function getUsers() {
        $db = new Database();
        $stmt = $db->query('SELECT * FROM user;');

        return array(
            'sqlstate' => $stmt->fetchAll()
        );
    }

    public function get() {
        $username = $_GET['name'] ?? '';

        $db = new Database();
        $sql = "SELECT id FROM user WHERE name = '" . $username . "';";

        $stmt = $db->query($sql);


        return array(
            'user_id' => $stmt->fetch()
        );
    }
}