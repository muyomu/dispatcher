<?php

namespace app\controller;

use app\advice\DK;
use muyomu\aop\advicetype\BeforeAdvice;
use muyomu\aop\advicetype\Hystrix;
use muyomu\dpara\exception\UrlNotMatch;
use muyomu\framework\base\BaseController;
use muyomu\framework\component\Controller;
use muyomu\log4p\Log4p;

#[Controller]
class Index extends BaseController {

    public function index(string $name,string $age): string
    {
        return "hello muix 2.0.x";
    }
}