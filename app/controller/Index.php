<?php

namespace app\controller;

use muyomu\framework\base\BaseController;
use muyomu\framework\component\Controller;

#[Controller]
class Index extends BaseController {

    public function index(string $filename):string
    {
        return "Hello,Muix";
    }
}