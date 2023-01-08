<?php

namespace app\controller;

use muyomu\auth\utility\Jwt;
use muyomu\framework\foundation\BaseController;
use muyomu\framework\type\Controller;

#[Controller]
class Index extends BaseController
{
    private function index():string
    {
        return date("Hello,muix!");
    }
}