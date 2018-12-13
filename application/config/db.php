<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require "application/vendor/autoload.php";

//foreach (glob(__DIR__."application/models/*.php") as $filename) {
//    require_once $filename;
//}

$capsule = new Capsule();

$capsule->addConnection([
    'host' => 'localhost',
    'name' => 'person',
    'user' => 'root',
    'password' => 'secret'
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

//return[
//    'host' => 'localhost',
//    'name' => 'person',
//    'user' => 'root',
//    'password' => 'secret'
//];