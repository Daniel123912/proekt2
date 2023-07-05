<?php

namespace App\Models;

use Database\DB;

class AdminPanelModel 
{
    private $database;

    public function __construct()
    {
        $this->database = new DB();
    }

    /**
     * Вывод всех пользователей
     */
    public function allUser()
    {
        return $this->database->query('SELECT * FROM users');
    }

    /**
     * Поиск пользователей
     * @param string $field поле по которому ведется поиск
     * @param string $value значение по для выборки
     * 
     * @return array
     */
    public function searchUsers(string $field, string $value) : array
    {
        return $this->database->query("SELECT * FROM users WHERE $field = '$value'");
    }
}

?>