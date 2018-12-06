<?php

require 'application/lib/Dev.php';

use application\core\Router;

//spl_autoload_register - Функция автозагрузки
spl_autoload_register(function ($class){
    //Подключение класса
   $path = str_replace('\\', '/', $class.'.php');
   if (file_exists($path)){
       require $path;
   }
});

//
//session_start();

$router = new Router;

$router->run();