<?php

namespace application\core;

class View {

    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route) {
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
    }

    public function render($title) {
        //Делаем проверку на существование файла
        if (file_exists('application/views/'.$this->path.'.php')){
            ob_start();
            //Загружаем сонтент для страницы
            require 'application/views/'.$this->path.'.php';
            $content = ob_get_clean();
            //Загружаем дефолтный шаблон
            require 'application/views/layouts/'.$this->layout.'.php';
        } else {
            echo 'Вид не найден'.$this->path;
        }
    }

}