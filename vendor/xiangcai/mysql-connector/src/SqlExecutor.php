<?php

namespace xiangcai\database\mysql;

use mysqli;
use xiangcai\database\mysql\base\Schema;
use xiangcai\database\mysql\client\SqlQuery;
use xiangcai\database\mysql\exception\FiledNotMatch;
use xiangcai\database\mysql\exception\FiledTypeNotMatch;

class SqlExecutor implements SqlQuery
{

    /**
     * @throws FiledNotMatch|FiledTypeNotMatch
     */
    public function sqlExecutor(array $args, Schema $schema, mysqli $con): int
    {
        $sql = $this->getSql($schema, $args);

        return mysqli_query($con, $sql);
    }

    /**
     * @throws FiledNotMatch
     * @throws FiledTypeNotMatch
     */
    public function sqlSelectExecutor(array $args, Schema $schema, mysqli $con): array
    {
        $sql = $this->getSql($schema, $args);

        return mysqli_fetch_all(mysqli_query($con, $sql));
    }

    /**
     * @param Schema $schema
     * @param array $args
     * @return array|string|string[]
     * @throws FiledNotMatch
     * @throws FiledTypeNotMatch
     */
    private function getSql(Schema $schema, array $args): string|array
    {
        $sql = $schema->getSql();

        $keys = array_keys($schema->getFiled());

        /*
         * 验证数据字段是否存在
         */
        foreach ($keys as $key) {
            if (!array_key_exists($key, $args)) {
                throw new FiledNotMatch();
            }
        }

        /*
         * 进行数据类型验证
         */
        foreach ($keys as $key) {
            //存在options的验证器
            if (is_array($schema->getFiled()[$key])) {
                if (!filter_var($args[$key], $schema->getFiled()[$key]['filter'], $schema->getFiled()[$key]['options'])) {
                    throw new FiledTypeNotMatch($key);
                }
            } else {//不存在options的验证器
                if (is_bool(filter_var($args[$key], $schema->getFiled()[$key]))) {
                    throw new FiledTypeNotMatch($key);
                }
            }
        }

        /*
         * 将数据插入到sql语句中
         */
        foreach ($keys as $key) {
            $sql = str_replace(":" . $key, $args[$key], $sql);
        }

        /*
         * 返回sql
         */
        return $sql;
    }
}