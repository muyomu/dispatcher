<?php

namespace xiangcai\database\mysql\exception;

use Exception;

class FiledTypeNotMatch extends Exception
{

    public function __construct(string $filed)
    {
        parent::__construct("Filed - {$filed} TypeNotMatch");
    }
}