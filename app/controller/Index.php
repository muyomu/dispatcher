<?php

namespace app\controller;

use muyomu\framework\foundation\BaseController;
use muyomu\framework\type\Controller;

#[Controller]
class Index extends BaseController
{
    private function index():string
    {
        return "Hello,Muix";
    }
}