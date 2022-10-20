<?php

namespace xiangcai\database\mysql\exception;

use Exception;

class FiledNotMatch extends Exception
{
    public function __construct()
    {
        parent::__construct("FiledNotMatch");
    }
}