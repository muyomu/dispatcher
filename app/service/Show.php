<?php

namespace app\service;

use app\advice\Tk;
use muyomu\aop\advicetype\BeforeAdvice;

class Show
{
    #[BeforeAdvice(new Tk())]
    public function show():string{
        return "hello world";
    }
}