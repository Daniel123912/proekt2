<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use Router\Route;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Database\DB;

require_once 'vendor/autoload.php';

// Роутер
$route = new Route;

// Подключение twig
$loader = new FilesystemLoader('Views');
$view = new Environment($loader);

// Главная страница
$route->addRoute("/", function () use ($view) {
    echo $view->render('index.twig');
});
$route->addRoute("/job-detail", function () use ($view) {
    echo $view->render('job-detail.twig');
});

$route->addRoute("/job-detail1", function () use ($view) {
    echo $view->render('job-detail1.twig');
});
$route->addRoute("/job-detail2", function () use ($view) {
    echo $view->render('job-detail2.twig');
});
$route->addRoute("/job-detail3", function () use ($view) {
    echo $view->render('job-detail3.twig');
});
$route->addRoute("/job-detail4", function () use ($view) {
    echo $view->render('job-detail4.twig');
});
$route->addRoute("/job-list", function () use ($view) {
    echo $view->render('job-list.twig');
});
$route->addRoute("/page-about", function () use ($view) {
    echo $view->render('page-about.twig');
});
$route->addRoute("/page-contact", function () use ($view) {
    echo $view->render('page-contact.twig');
});
$route->addRoute("/page-faq", function () use ($view) {
    echo $view->render('page-faq.twig');
});
$route->addRoute("/company-detail", function () use ($view) {
    echo $view->render('company-detail.twig');
});

$route->addRoute("/forma", function () use ($view) {
    echo $view->render('forma.twig');
});
$route->addRoute("/job-list-2", function () use ($view) {
    echo $view->render('job-list-2.twig');
});
$route->addRoute("/company-list", function () use ($view) {
    echo $view->render('company-list.twig');
});
// Вход
$route->addRoute("/login", function () {
    $controller = new App\Controllers\LoginController;
    
    echo $controller->renderPage();
    if (!empty($_POST['email'])) {
        $email = $_POST['email'];
        if ($controller->loginUser($email) == true) {
            $controller->setSession($email);
            header("Location: /");
        }
    }
});

// Регистрация
$route->addRoute("/reg", function () {
    $controller = new App\Controllers\RegistrController;

    echo $controller->renderPage();

    if (!empty($_POST)) {
        $surname = $_POST['surname'];	
        $name = $_POST['name'];
        $patronymic = $_POST['patronymic'];
        $job = $_POST['job'];
        $country = $_POST['country'];
        $inn = $_POST['inn'];
        $passport = $_POST['passport'];
        $phone_number = $_POST['phone_number'];
        $email = $_POST['email'];
        $telegram = $_POST['telegram'];

        $controller->regUser($surname, $name , $patronymic, $job, 
        $country, $inn, $passport, $phone_number, $email, $telegram);

        $controller->setSession($email);

        header("Location: /");
    }
});

// Админка
$route->addRoute('/admin_panel', function () {
    $controller = new App\Controllers\AdminPanelController;

    echo $controller->renderPage();
});

// Update user
/*$route->addRoute('/update_user', function () use ($view) {
    $db = new DB();
    $user = $db->query('SELECT * FROM users WHERE id = :id', [':id' => $_GET['id']]);
    echo $view->render('update_user.twig',
    [
        'user' => $user[0]
    ]
    );
});*/

// Save update user
$route->addRoute('/save_update_user', function () use ($view) {
    $db = new DB();

    $db->query("UPDATE users
        SET name = :name, surname = :surname, patronymic = :patronymic, 
        inn = :inn, passport = :passport, phone_number = :phone_number, 
        email = :email, telegram = :telegram
    WHERE id = :id", 
    [
        ':id' => $_POST['id'],
        ':name' => $_POST['name'],
        ':surname' => $_POST['surname'],
        ':patronymic' => $_POST['patronymic'],
        ':inn' => $_POST['inn'],
        ':passport' => $_POST['passport'],
        ':phone_number' => $_POST['phone_number'],
        ':email' => $_POST['email'],
        ':telegram' => $_POST['telegram']
    ]);

    header("Location: /admin_panel");
});

// DELETE USER
$route->addRoute('/delete_user', function () {
    $db = new DB();

    $db->query("DELETE FROM users
    WHERE id =:id", [':id' => $_GET['id']]);

    header("Location: /admin_panel");
});

$route->addRoute('/login', function () {
    // Получение данных из формы
    $email = $_POST["email"];
    // Создание экземпляра контроллера
    $controller = new App\Controllers\LoginController();
    // Вызов метода loginUser с передачей email
    $isAuthenticated =  $controller->loginUser($email);
    // Проверка результата авторизации
    if ($isAuthenticated) {
      echo "Вы успешно авторизованы!";
    } else {
      echo "Ошибка авторизации. Проверьте правильность введенных данных.";
    }
  });
// Поиск пользователей
$route->addRoute('/admin_panel_search_users', function () {
    $controller = new App\Controllers\AdminPanelController;
    
    // Если get параметры пустые, то перекидываем на стартовую страницу HR
    if (empty($_GET['field'])) {
        header('Location: /admin_panel');
    }
    else {
        echo $controller->renderPage(
            $controller->searchUsers($controller->searchField($_GET['field']), $_GET['value']));
    }
    // Проверяем, была ли отправлена форма для входа в административную панель
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем введенные логин и пароль
    $login = $_POST["login"];
    $password = $_POST["password"];

    // Проверяем, совпадают ли логин и пароль с требуемыми значениями
    if ($login === "admin" && $password === "admin") {
        // Вход выполнен успешно
        // Перенаправляем на другую страницу
        header("Location: admin_panel.twig");
        exit(); // Важно добавить exit() для прекращения выполнения скрипта после перенаправления
    } else {
        // Неверный логин или пароль
        echo "Неверный логин или пароль!";
    }
}
});

// Страница 404
$route->addRoute('404', function () use ($view) {
    echo $view->render('404.twig');
});

$route->dispatch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>