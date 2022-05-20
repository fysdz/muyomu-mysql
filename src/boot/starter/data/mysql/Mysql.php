<?php
/**
 * User: liumutian
 * Date: 2022/5/19/019
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\starter\data\mysql;

use boot\starter\data\mysql\impl\MysqlEnvironment;

class Mysql implements MysqlEnvironment
{

    public function watch(): void
    {
        // TODO: Implement watch() method.
    }

    public function execute(string $sql, array $values)
    {
        // TODO: Implement execute() method.
    }

    public function rollback(): void
    {
        // TODO: Implement rollback() method.
    }

    public function commit(): void
    {
        // TODO: Implement commit() method.
    }
}