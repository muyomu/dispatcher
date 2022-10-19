<?php

namespace app\schema;

use xiangcai\database\mysql\base\Schema;

class KI extends Schema{
    protected string $sql = "delete from user_name";

    protected string $table = "user_name";

    protected array $filed = [];
}