<?php

namespace App\Models;

session_start();

use Database\DB;

class LoginModel
{
    private $database;

    public function __construct()
    {
        $this->database = new DB();
    }

    public function userSearch(string $email) : array
    {
        return ($this->database->query(
            'SELECT * FROM users WHERE email = :email',
            [':email' => $email]
        ));
    }

    public function setSession(string $emailUser) : void
    {
        $_SESSION["emailUser"] = $emailUser;
    }
}

?>