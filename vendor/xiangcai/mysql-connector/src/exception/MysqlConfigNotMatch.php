<?php

namespace xiangcai\database\mysql\exception;

use Exception;

class MysqlConfigNotMatch extends Exception
{

    public function __construct()
    {
        parent::__construct("MysqlConfigNotMatch");
    }
}