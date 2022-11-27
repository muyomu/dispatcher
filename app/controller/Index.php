<?php

namespace app\controller;

use muyomu\framework\base\BaseController;
use muyomu\framework\component\Controller;

#[Controller]
class Index extends BaseController {

    public function index():string
    {
        return "Hello,Muix";
    }
}