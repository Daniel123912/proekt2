<?php

namespace App\Models;

session_start();

use Database\DB;

class RegistrModel
{
    private $database;

    public function __construct()
    {
        $this->database = new DB();
    }

    public function addUser($surname, $name , $patronymic, $job, 
    $country, $inn, $passport, $phone_number, $email, $telegram) : void
    {
        $this->database->query(
            'INSERT INTO users(surname, name, patronymic, job, country, inn, 
            passport, phone_number, email, telegram) 
            VALUES(:surname, :name, :patronymic, :job, :country, :inn, 
            :passport, :phone_number, :email, :telegram)',
                [
                    ':surname' => $surname,
                    ':name' => $name,
                    ':patronymic' => $patronymic,
                    ':job' => $job,
                    ':country' => $country,
                    ':inn' => $inn, 
                    ':passport' => $passport,
                    ':phone_number' => $phone_number,
                    ':email' => $email,
                    ':telegram' => $telegram
                ]);
    }

    public function setSession(string $emailUser) : void
    {
        $_SESSION["emailUser"] = $emailUser;
    }
}

?>