<?php
//Роутер


//Положение класса в нашей файловой системе
//Задаем пространство имени
namespace application\core;

class Router {
    protected $routes = [];
    protected $params = [];

    public function  __construct() {
        $arr = require 'application/config/routes.php';
        //Для регулярного выражения
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }

    }

    //Функция добавления маршрутов
    public function add($route, $params) {
        //Добавляет регулярное выражение
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }

    //Функция для проверки маршрута
    public function match() {
        //$_SERVER['REQUEST_URI'] - Страница на которой мы сейчас находимся
        $url = trim($_SERVER['REQUEST_URI'], '/');
        //Перебираем массив маршрутов
        foreach ($this->routes as $route => $params) {
            //preg_match() - проверяем соответствие этих данных. В переменной $matches будут храниться совпадения
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;

    }

    public function run() {
        if($this->match()){
            $path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
            if (class_exists($path)) {
                $action = $this->params['action'].'Action';
                if (method_exists($path, $action)) {
                    $controller = new $path($this->params);
                    $controller->$action();
                } else {
                    echo 'Не найден екшен: '.$action;
                }
            } else {
                echo 'Не найден контроллер: '.$path;
            }
        } else {
            echo 'Маршрут не найден';
        }
    }

}