<?php

namespace application\lib;

//Выдает массив содержимого всех файлов
class FileJSON {

    public $arrData = [];
    public $arrFiles = [];
    public $arrFilesId = [];

    public function __construct() {
        $this->getCountFile();
        $res = $this->arrFilesId;
        for ($i = 0; $i <= count($res) - 1; $i++) {
            $map = '/home/vagrant/code/test/public/USERS/USER'.$this->arrFilesId[$i].'.json';
            if(file_exists($map)){
                $json = file_get_contents("$map");
                $arrFile = json_decode($json, true);
                $this->arrData[] = $arrFile;
            }
        }
    }


        public function getCountFile(){
        $path = '/home/vagrant/code/test/public/USERS'; // название папки в той же директории, что и файл
        $dir = opendir ("$path"); // открываем директорию
        while (false !== ($file = readdir($dir))) {
        // ниже указываем расширение файла. Вместо jpg выбираете нужный
              if (strpos($file, '.json', 1) ) {
                  $this->arrFiles[] = $file;
          }
        }
        foreach ($this->arrFiles as $value){
            $map = '/home/vagrant/code/test/public/USERS/'.$value;
            $json = file_get_contents("$map");
            $arrFile = json_decode($json, true);
            //$this->arrFilesId[] =  $arrFile['ID'];
        }
            sort($this->arrFilesId);
    }



}