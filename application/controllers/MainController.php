<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller{

    public function indexAction() {
        //Получаем массив всех пользователей

        $arrFiles = $this->model->loadUsers();
        $dataPost = $_POST;

        if (isset($dataPost['searchInput']) && isset($dataPost['searchFile'])) {
            if(!empty($dataPost['searchFile'])){
                //Разбираем массив и находим совпадения
                $formCh = $this->model->searchInFiles($_POST['searchFile'], $arrFiles);
                //Рендерим массив с совпадениями
                $this->view->render($dataPost['searchFile'], $formCh);
            } else {
                $this->view->render('', $arrFiles);
            }
       } else {
            //Остальные посты
//            if($dataPost){
//                $this->model->test($dataPost, debug($arrFiles));
//            }
            if (isset($dataPost['searchFile'])) {
                $this->view->render($dataPost['searchFile'], $arrFiles);
            } else {
                $this->view->render('', [
                    'arr' => $arrFiles,
                    'count' => $this->model->count,
                ]);
            }
        }
    }
}