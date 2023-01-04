<?php

namespace app\advice;

use app\service\Show;
use muyomu\aop\advice\BeforeAdvice;

class Tk extends Show implements BeforeAdvice
{
    public function beforeAdvice(): void
    {
        echo "show";
    }
}