<?php

namespace Router;

class Route
{
    /**
     * uri и их функции
     * @var array
     */
    public array $routes = [];

    /**
     * Регистрация нового маршрута
     * @param string $uri
     * @param callable $action
     * @return bool Возварщает false, если указанный маршрут уже существует
     */
    public function addRoute(string $uri, callable $action) : bool
    {
        if (empty($this->routes[$uri])) {
            $this->routes[$uri] = $action;
            return true;
        }
        return false;
    }

    /**
     * Вызов функции для маршрута
     * @return mixed
     */
    public function dispatch()
    {
        // Удаляем из URL GET параметры и символ "/" в конце
        $uri = $_SERVER['REQUEST_URI'];
        $uri = explode('?', $uri);
        $uri = $uri[0];

        $action = $this->routes[$uri];

        // Вызов функции страницы 404
        if (empty($action))
            return call_user_func($this->routes['404']);

        return call_user_func($action);
    }
}

?>