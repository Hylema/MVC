<?php

namespace application\models;

use application\core\Model;
use application\lib\FileJSON;

//use application\lib\FileJSON;

class Person extends Model {

    //Для поля добавления
    public $id = null;
    public $name;
    public $login;
    public $birthday;

    //Для поля изменения
    protected $personId;
    protected $chooseNameBlock;
    protected $inscribeNameBlock;

    //
    protected $post;
    protected $urlFolder = '/home/vagrant/code/test/public/USERS/';
    protected $urlFile = '/home/vagrant/code/test/public/USERS/USER';
    protected $file;

    //Ошибки
    public $mistake = [];
    public $needId;




//    public function __construct() {
//        debug($this->filesJson);
//    }

    public function getCountFile($id) {
        $path = $this->urlFolder;
        $dir = opendir ("$path"); // открываем директорию
        while (false !== ($file = readdir($dir))) {
              if (strpos($file, $id.'.json',1) ) {
              $this->file = $file;
          }
        }
        return $this->file;

    }

    public function getCountPersonOnFilesOrDataBase() {
        $path = $this->urlFolder;
        $dir = opendir ("$path"); // открываем директорию
        $i = 1;
        while (false !== ($file = readdir($dir))) {
            if (strpos($file, '_'.$i.'.json',1)) {
                $i++;
            }
        }
        return $i;

    }

//    public function createFile() {
//        $fileName = $this->fileNameGen();
//        if (!file_exists($fileName)) {
//            $fp = fopen($this->urlFolder . $fileName, "w");
//            $data = [
//                'ID' => $this->id,
//                'Name' => $this->name,
//                'Login' => $this->login,
//                'Birthday' => $this->reverse($this->birthday),
//            ];
//            $newJsonString = json_encode($data);
//            file_put_contents($this->urlFolder . $fileName, $newJsonString);
//            fclose($fp);
//        } else {
//            echo 'ID такого пользователя уже существует: ' . $this->id;
//        }
//    }

    public function deleteOr($post) {
        foreach ($post as $key => $val){
//            if($key == $post['change']){
//                return $this->changeFile();
//            }

            if($key == $post['delete']) {
                return $this->deleteFile($post['id']);
            }
        }
    }

//    public function changeFile() {
//        $numberFile = $this->getCountFile($this->personId);
//        $urlFile =  $this->urlFolder.$numberFile;
//        if(file_exists($urlFile)) {
//            $test = file_get_contents($urlFile);
//            $jsDecodeArr = json_decode($test, true);
//            $jsDecodeArr[$this->chooseNameBlock] = $this->inscribeNameBlock;
//            $jsEncodeArr = json_encode($jsDecodeArr);
//            file_put_contents($urlFile, $jsEncodeArr);
//        } else {
//            echo 'Такого файла не существует';
//        }
//    }

    public function deleteFile($id) {
        unlink($this->urlFolder.$this->getCountFile($id));
        $new_url = 'http://test.app.devspark.ru/';
        header('Location: ' . $new_url);
    }

//    public function loadUsers() {
//        // Читает директорию и создает массив пользователей и возвращает его
//        for ($i = 0; $i <= $this->getCountFile(); $i++){
//
//        }
//    }

    public function fileNameGen() {
        return $this->urlFolder . '/USER_' . $this->id . '.json';
    }

    public function write() {
        file_put_contents($this->fileNameGen(), json_encode($this->toArray()));
    }

    public function read() {
        $content = file_get_contents($this->fileNameGen());
        $content = json_decode($content, true);
        if (is_array($content)) {
            $this->id = $content['id'];
            $this->name = $content['name'];
            $this->login = $content['login'];
            $this->birthday = $content['birthday'];
        }
    }

    public function open($id){
        $this->id = $id;
        $content = file_get_contents($this->fileNameGen());
        $content = json_decode($content, true);
        return $content;
    }

    public function deleteThisFile() {

        //Проверка для страницы 'добавления пользователя'

            $this->post = $_POST;
            $this->deleteOr($this->post);


    }

    public function save() {
        $this->write();
    }

    public function isFilledCorrectly() {
        if (empty($this->id)) {
            $fault = 'Вы не указали ID';
            $this->mistake[] = $fault;
            return false;
        }
        if (empty($this->name)) {
            $fault = 'Вы не указали Name';
            $this->mistake[] = $fault;
            return false;
        }
        if (empty($this->login)) {
            $fault = 'Вы не указали Login';
            $this->mistake[] = $fault;
            return false;
        }
        if (empty($this->birthday)) {
            $fault = 'Вы не указали Birthday';
            $this->mistake[] = $fault;
            return false;
        }
        return true;
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'login' => $this->login,
            'birthday' => $this->birthday,
        ];
    }
}
