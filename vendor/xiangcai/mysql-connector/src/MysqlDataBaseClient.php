<?php

namespace xiangcai\database\mysql;

use mysqli;
use xiangcai\database\mysql\base\MysqlDataBase;
use xiangcai\database\mysql\base\Schema;
use xiangcai\database\mysql\client\SqlClient;
use xiangcai\database\mysql\exception\MysqlConfigNotMatch;

class MysqlDataBaseClient implements SqlClient {

    private mysqli $con;

    private Schema $table;

    private ?string $database = null;

    private SqlExecutor $sqlExecutor;

    public function __construct(Schema $table,string $database)
    {
        $this->sqlExecutor = new SqlExecutor();
        $this->table = $table;
        $this->database = $database;
    }

    /**
     * @throws MysqlConfigNotMatch|exception\FiledNotMatch|exception\FiledTypeNotMatch
     */
    public function select(array $args): array
    {
        $this->con = MysqlDataBase::getDatabase($this->database);
        return $this->sqlExecutor->sqlSelectExecutor($args,$this->table,$this->con);
    }

    /**
     * @throws MysqlConfigNotMatch|exception\FiledNotMatch
     */
    public function update(array $args): int
    {
        $this->con = MysqlDataBase::getDatabase($this->database);
        return $this->sqlExecutor->sqlExecutor($args,$this->table,$this->con);
    }

    /**
     * @throws MysqlConfigNotMatch|exception\FiledNotMatch
     */
    public function delete(array $args): int
    {
        $this->con = MysqlDataBase::getDatabase($this->database);
        return $this->sqlExecutor->sqlExecutor($args,$this->table,$this->con);
    }

    /**
     * @throws MysqlConfigNotMatch|exception\FiledNotMatch
     */
    public function insert(array $args): int
    {
        $this->con = MysqlDataBase::getDatabase($this->database);
        return $this->sqlExecutor->sqlExecutor($args,$this->table,$this->con);
    }

    /**
     * @throws MysqlConfigNotMatch|exception\FiledNotMatch
     */
    public function insertBulk(array $args): int
    {
        $this->con = MysqlDataBase::getDatabase($this->database);
        return $this->sqlExecutor->sqlExecutor($args,$this->table,$this->con);
    }
}