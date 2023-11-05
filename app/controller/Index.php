<?php

namespace app\controller;

use app\mode\Data;
use muyomu\data\connector\PdoMysql;
use muyomu\data\exception\AttributeNotTagException;
use muyomu\data\Result\Mode;
use muyomu\executor\annotation\Para;
use muyomu\framework\foundation\BaseController;
use muyomu\framework\type\Controller;
use muyomu\http\exception\FileNotFoundException;
use ReflectionException;

#[Controller]
class Index extends BaseController
{
    private PdoMysql $mysql;

    public function __construct(){
        $this->mysql = new PdoMysql(Data::class);
    }

    /**
     * @throws ReflectionException
     * @throws AttributeNotTagException
     */
    public function index():bool
    {
        $this->mysql->transaction();
        $this->mysql->query("addUser",array("name"=>"mutian","sex"=>"male","age"=>33));
        $this->mysql->rollback();
        return $this->mysql->getResult(Mode::RESULT_STAT);
    }

    /**
     * @return int
     * @throws AttributeNotTagException
     * @throws ReflectionException
     */
    public function show():int{
        $this->mysql->query("delUser",array("name"=>"mutian"));
        return $this->mysql->getResult(Mode::RESULT_ROW);
    }

    /**
     * @throws FileNotFoundException
     */
    public function view(#[Para("name","get")]string $name):void{
        $this->response->doViewResponse("view/$name.html");
    }
}