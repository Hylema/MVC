<?php

namespace application\controllers;

use application\core\Controller;

class PersonController extends Controller {

    public function getAction() {
        $this->view->render('Страница получения списка пользователей');
    }

    public function addAction() {
        $this->view->render('Страница добавления пользователя');
    }

    public function changeAction() {
        $this->view->render('Страница изменения пользователя');
        $this->model->test();
    }

    public function deleteAction() {
        $this->view->render('Страница удаление пользователя');
    }

    public function searchAction() {
        $this->view->render('Страница поиска пользователей');
    }

}