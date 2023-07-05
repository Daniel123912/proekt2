<?php

namespace App\Controllers;

use App\Models\AdminPanelModel;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class AdminPanelController
{
    private $model;

    private Environment $view;


    public function __construct()
    {
        $this->model = new AdminPanelModel;

        $loader = new FilesystemLoader('Views');
        $this->view = new Environment($loader);
    }

    /**
     * Исчит пользователей из БД по параметру
     * @param string $field поле по которому ведется поиск
     * @param string $value значение для поля
     * 
     * Возвращает либо текст `error`, либо все записи из БД, которые были найдены
     */
    public function searchUsers(string $field, string $value)
    {
        if (empty($this->model->searchUsers($field, $value))) {
            return 'error';
        }
        return $this->model->searchUsers($field, $value);
    }

    /**
     * Находит имя поля из БД по имени поля из интерфеса
     * Пример: Отчество - patronymic
     * @param string $nameField Имя поля из интерфейса
     * 
     * @return string Имя поля из БД
     */
    public function searchField(string $nameField) : string
    {
        switch ($nameField) {
            case 'Имя':
                $fieldBD = 'name';
                break;
            case 'Фамилия':
                $fieldBD = 'surname';
                break;
            case 'Отчество':
                $fieldBD = 'patronymic';
                break;
            case 'Работа':
                $fieldBD = 'job';
                break;
            case 'Страна':
                $fieldBD = 'country';
                break;
            case 'ИНН':
                $fieldBD = 'inn';
                break;
            case 'Паспорт':
                $fieldBD = 'passport';
                break;
            case 'Телефонный номер':
                $fieldBD = 'phone_number';
                break;
            case 'Email':
                $fieldBD = 'email';
                break;
            case 'Telegram':
                $fieldBD = 'telegram';
                break;
        }

        return $fieldBD;
    }

    public function renderPage($viewUsers = null) : string
    {
        // Вывод страницы
        if ($viewUsers == null) {
            return $this->view->render('admin_panel.twig',
                [
                    'users' => $this->model->allUser()
                ]
            );
        }
        elseif ($viewUsers == 'error') {
            return $this->view->render('admin_panel.twig',
                [
                    'error' => 'Ошибка: ничего не найдено'
                ]
            );
        }
        else {
            return $this->view->render('admin_panel.twig',
                [
                    'users' => $viewUsers
                ]
            );
        }
    }
}

?>