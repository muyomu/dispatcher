<?php

namespace xiangcai\database\mysql\base;

use mysqli;
use xiangcai\database\mysql\exception\MysqlConfigNotMatch;

class MysqlDataBase
{
    private static ?mysqli $con = null;

    /**
     * @throws MysqlConfigNotMatch
     */
    public static function getDatabase(string $database): mysqli{
        if (is_null(self::$con)){
            self::initDataBase($database);
        }
        return self::$con;
    }

    /**
     * @throws MysqlConfigNotMatch
     */
    private static function initDataBase(string $database):void{
        if (!isset($GLOBALS['config_mysql'])){
            throw new MysqlConfigNotMatch();
        }else{
            $serve = $GLOBALS['config_mysql'][$database];
            self::$con =mysqli_connect($serve['hostname'],$serve['username'],$serve['password'],$database);
        }
    }
}