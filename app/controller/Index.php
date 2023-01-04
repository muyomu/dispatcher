<?php

namespace app\controller;

use app\service\Show;
use muyomu\aop\AopExecutor;
use muyomu\aop\exception\AopException;
use muyomu\auth\utility\Jwt;
use muyomu\framework\foundation\BaseController;
use muyomu\framework\type\Controller;
use muyomu\inject\annotation\AutoWired;
use ReflectionException;

#[Controller]
class Index extends BaseController
{
    #[AutoWired(Show::class)]
    private Show $show;

    #[AutoWired(AopExecutor::class)]
    private AopExecutor $aopExecutor;

    #[AutoWired(Jwt::class)]
    private Jwt $jwt;

    /**
     * @throws ReflectionException
     * @throws AopException
     */
    private function index():string
    {
        return $this->aopExecutor->aopExecutor($this->show,"show",array());
    }

    private function show():string{
        return $this->jwt->getToken(array(
            "uid"=>"liuzhang"
        ));
    }
}