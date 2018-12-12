<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller{

    public function indexAction() {
        //Получаем массив всех пользователей

//        $arrFiles = $this->model->loadUsers();
//        $dataPost = $_POST;

//        if (isset($dataPost['searchInput']) && isset($dataPost['searchFile'])) {
//            if(!empty($dataPost['searchFile'])){
//                //Разбираем массив и находим совпадения
//                $formCh = $this->model->searchInFiles($_POST['searchFile'], $arrFiles);
//                //Рендерим массив с совпадениями
//                $this->view->render($dataPost['searchFile'], [
//                    'arr' => $formCh,
//                ]);
//            } else {
//                $this->view->render('', [
//                    'arr' => $arrFiles,
//                ]);
//            }
//       } else {
//            if (isset($dataPost['searchFile'])) {
//                $this->view->render($dataPost['searchFile'], [
//                    'arr' => $arrFiles,
//                ]);
//            } else {
//                $this->view->render('', [
//                    'arr' => $arrFiles,
//                ]);
//            }
//        }


//        if (isset($dataPost['searchInput']) && isset($dataPost['searchFile'])) {
//            if(!empty($dataPost['searchFile'])){
//                //Разбираем массив и находим совпадения
//                $formCh = $this->model->searchInFiles($_POST['searchFile'], $arrFiles);
//                //Рендерим массив с совпадениями
//                $this->view->render('Главная страница', [
//                    'arr' => $formCh,
//                    'search' => $dataPost['searchFile'],
//                ]);
//            } else {
//                $this->view->render('Главная страница', [
//                    'arr' => $arrFiles,
//                ]);
//            }
//        } else {
//            $this->view->render('Главная страница', [
//                'arr' => $arrFiles,
//            ]);
//        }


//        if (!empty($dataPost['searchFile'])) {
//                $formCh = $this->model->searchInFiles($_POST['searchFile'], $arrFiles); //Разбираем массив и находим совпадения
//                $this->view->render('Главная страница', [
//                    'arr' => $formCh,
//                    'search' => $dataPost['searchFile'],
//                ]);
//        } else {
            $this->view->render('Главная страница', [
                'arr' => $this->model->renderOrNot(),
 //               'search' => $dataPost['searchFile'],
            ]);
//        }
    }
}