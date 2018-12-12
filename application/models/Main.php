<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

    public $search = [];
    public $flag = false;
    public $num;
    public $delete = 'delete';
    public $change = 'change';
    public $sense;
    public $count = 0;
    protected $urlFolder = '/home/vagrant/code/test/public/USERS/';

    public function renderOrNot() {
        $arrFiles = $this->loadUsers();
        $dataPost = $_POST;
        if (!empty($dataPost['searchFile'])) {
            $formCh = $this->searchInFiles($dataPost['searchFile'], $arrFiles); //Разбираем массив и находим совпадения
            return $formCh;
        } else {
            return $arrFiles;
        }
    }

    public function getAllPerson() {
        return $this->filesJson;
    }

//    public function test(){
//        foreach ($data['Users'] as $key){
//            foreach ($key as $word => $value){
//                if(strpos(  $value ,  $search ) !== false){
//                    echo $word." = ".$value."<br>";
//                }
//            }
//        }
//    }

    public function loadUsers() {
        $result = [];
        $count = $this->count;
        $path = $this->urlFolder; // название папки в той же директории, что и файл
        $dir = opendir ($path); // открываем директорию
        while (false !== ($file = readdir($dir))) {
            // ниже указываем расширение файла. Вместо jpg выбираете нужный
            //if (strpos($file, '.json', 1) ) {
            if (preg_match("/USER_(.*?)\.json/", $file, $matches)) {
                $person = new Person();
                $person->id = $matches[1];
                $person->read();
                $result[] = $person->toArray();
                $count++;
                //}
            }
        }
        $this->count = $count;
        return $result;
    }

    public function test($dataPost, $arrFiles) {

        foreach ($dataPost as $key => $value){
            $this->num = substr ($key, 6);
            $this->sense = $key;
        }

        foreach ($arrFiles as $keys => $values){
            if ($keys == $this->num) {
                if($this->delete.$this->num == $this->sense) {
                    return $this->delete($this->delete.$this->num);
                } else if($this->change.$this->num == $this->sense) {
                    return $this->change($this->change.$this->num);
                }
            }
        }

    }

    public function delete($arr){
        $delete_url = 'http://test.app.devspark.ru/person/delete';
        header('Location: '.$delete_url);
        //echo 'Удалить '.$arr;
    }

    public function change($arr){
        $change_url = 'http://test.app.devspark.ru/person/change';
        header('Location: '.$change_url);
        //echo 'Изменить '.$arr;

    }

    public function searchInFiles($post, $arr) {
            foreach ($arr as $key){
                foreach ($key as $item => $value){
                    if(strpos($value, $post) !==false) {
                        $this->search[] = $key;
                        break;
                    }
                }
            }
            return $this->search;

    }

}