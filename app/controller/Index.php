<?php

namespace app\controller;

use app\schema\KI;
use muyomu\framework\base\BaseController;
use muyomu\framework\component\Controller;
use xiangcai\database\mysql\MysqlDataBaseClient;

#[Controller]
class Index extends BaseController {

    private MysqlDataBaseClient $mysqlDataBaseClient;

    public function __construct()
    {
        $this->mysqlDataBaseClient = new MysqlDataBaseClient(new KI(),"mutian");
    }

    public function index():string{

        return "hello";
    }
}