<?php

namespace boot\starter\data\mysql\base\impl;

use mysqli_result;

interface MysqlExecutor
{
    public function executeStaticQuery(string $statement, array $config): mysqli_result;

    public function executeDynamicQuery(string $statement,array $config): int;
}