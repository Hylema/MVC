<?php

namespace application\core;

class Singleton {
    private static $route = null;

    public static function getInstance(){
        if (self::$route ===null){
            self::$route = new Router();
        }

        return self::$route;
    }

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}
}