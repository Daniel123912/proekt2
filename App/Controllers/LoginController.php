<?php

namespace App\Controllers;

use App\Models\LoginModel;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class LoginController
{
    private $model;

    private Environment $view;

    public function __construct()
    {
        $this->model = new LoginModel;

        $loader = new FilesystemLoader('Views');
        $this->view = new Environment($loader);
    }

    public function loginUser(string $email) : bool
    {
        if (empty($this->model->userSearch($email))) {
            return false;
        }

        return true;
    }

    public function setSession(string $email) : void
    {
        $this->model->setSession($email);
    }

    public function renderPage() : string
    {
        // Вывод страницы
        return $this->view->render('login.twig');
    }
}




?>