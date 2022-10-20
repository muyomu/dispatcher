<?php

namespace xiangcai\database\mysql\client;

use mysqli;
use xiangcai\database\mysql\base\Schema;

interface SqlQuery
{
    public function sqlExecutor(array $args, Schema $schema, mysqli $con):int;

    public function sqlSelectExecutor(array $args, Schema $schema, mysqli $con):array;
}