<?php

namespace application\core;

use application\lib\FileJSON;

abstract class Model {

    public $filesJson;

    public function __construct() {
        $this->filesJson = new FileJSON;
    }
}