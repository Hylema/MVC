<?php

namespace application\core;

use application\core\View;
use application\models\User;

class Controller {

    public $route;
    public $view;
    public $model;

    public function __construct($route) {
        $this->route = $route;
        $this->view = new View($route);
        $this->model = new User();
    }

}