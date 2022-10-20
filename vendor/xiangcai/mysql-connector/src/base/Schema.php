<?php

namespace xiangcai\database\mysql\base;

abstract class Schema
{
    protected string $sql;

    protected string $table;

    protected array $filed = [];

    /**
     * @return string
     */
    public function getTable(): string
    {
        return $this->table;
    }

    /**
     * @return array
     */
    public function getFiled(): array
    {
        return $this->filed;
    }

    /**
     * @return string
     */
    public function getSql(): string
    {
        return $this->sql;
    }
}