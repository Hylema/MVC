<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller{

    public function indexAction() {

//        $db = new Db();
//        $data = $db->row('SELECT * FROM Persons');


        if(isset($_POST['personFromDb'])) {
            $this->view->render('Главная страница', [
                'arr' => $data,
                // Тут мы должны рендерить пользователей из БД
                // 'search' => $dataPost['searchFile'],
            ]);
        } else {
            $this->view->render('Главная страница', [
                'arr' => $this->model->renderOrNot(),
                // Тут мы должны рендерить пользователей из файла json
                // 'search' => $dataPost['searchFile'],
            ]);
        }
    }
}