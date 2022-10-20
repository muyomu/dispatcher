<?php

namespace xiangcai\database\mysql\client;

interface SqlClient
{
    public function select(array $args):array;

    public function update(array $args):int;

    public function delete(array $args):int;

    public function insert(array $args):int;

    public function insertBulk(array $args):int;
}