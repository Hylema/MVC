<?php

namespace application\controllers;

use application\core\Controller;

class PersonController extends Controller {

    public function getAction() {
        $this->view->render('Страница получения списка пользователей');
    }

    public function addAction() {

                if (!isset($_POST['submit'])) {
                    if (isset($_POST['id'])) {
                        $arrUser = $this->model->open($_POST['id']);
                        $this->view->render('Страница изменения пользователя', [
                            'arrUser' => $arrUser,
                        ]);
                    } else {
                        $this->view->render('Страница добавления пользователя', [
                            'count' => $this->model->getCountPersonOnFilesOrDataBase(),
                        ]);
                    }
                } else {
                    if (isset($_POST['id'])) {
                        $this->model->id = $_POST['id'];
                    }
                    if (isset($_POST['name'])) {
                        $this->model->name = $_POST['name'];
                    }
                    if (isset($_POST['login'])) {
                        $this->model->login = $_POST['login'];
                    }
                    if (isset($_POST['birthday'])) {
                        $this->model->birthday = $_POST['birthday'];
                    }

                    if ($this->model->isFilledCorrectly()) {

                        // save
                        $this->model->save();
                        //redirect
                        $new_url = 'http://test.app.devspark.ru/';
                        header('Location: ' . $new_url);
                    } else {
                        // Show form
                        $this->view->render('Страница добавления пользователя', [
                            'errors' => $this->model->mistake[0],
//                            'user' => $this->model->toArray(),
                            'arrUser' => $this->model->toArray(),
                        ]);
                    }

            }
        //$this->view->render('Страница добавления пользователя');
        //$this->model->formCheck();
    }

    public function changeAction() {
        $this->view->render('Страница изменения пользователя');
    }

    public function deleteAction() {
        //$this->view->render('Страница удаление пользователя');
        $this->model->deleteThisFile();
    }

    public function searchAction() {
        $this->view->render('Страница поиска пользователей');
    }

}