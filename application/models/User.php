<?php

namespace application\models;

class User {

    protected $id = null;
    protected $name = null;
    protected $login = null;
    protected $birthday = null;

    public function __construct() {

    }

    public function load($id) {
        // чтение данных из файла и наполнение внутренних переменных
    }

    public function create($fileName) {
        $file = $fileName;
        if (!file_exists($file)) {
            $fp = fopen($file, "w"); // ("r" - считывать "w" - создавать "a" - добовлять к тексту)
            fclose($fp);
        }
    }

    public function set($name, $value) {
        $this->$name = $value;
        // ...
    }

    public function save() {
        // запись в файл
    }

    public static function loadUsers() {
        // Читает директорию и создает массив пользователей и возвращает его
        return [
            (new User())->load(1),
            (new User())->load(2)
        ];
    }

    public function test(){
        if(isset($_POST['ChooseNumber'])) {
            echo $data = $_POST['ChooseNumber'].$_POST['ChooseNameBlock'].$_POST['inscribeNameBlock'];

        }
    }
}
$user = new User();
$user->create('User1.json');
$user->set("name", "Vasya");
$user->set("id", 1);
$user->save();

$user2 = new User();
$user2->load(1);

$users = User::loadUsers();
$users[] = $user;
var_dump($user);



//
//$run = new model_user();
//$run->run();