<?php

namespace App\Controllers;

use App\Models\RegistrModel;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class RegistrController
{
    private $model;

    private Environment $view;

    public function __construct()
    {
        $this->model = new RegistrModel;

        $loader = new FilesystemLoader('Views');
        $this->view = new Environment($loader);
    }

    public function regUser($surname, $name , $patronymic, $job, 
    $country, $inn, $passport, $phone_number, $email, $telegram) : void
    {
        $this->model->addUser($surname, $name , $patronymic, $job, 
        $country, $inn, $passport, $phone_number, $email, $telegram);
    }

    public function setSession(string $email) : void
    {
        $this->model->setSession($email);
    }

    public function renderPage() : string
    {
        // Вывод страницы
        return $this->view->render('forma.twig');
    }
}

?>