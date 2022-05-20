<?php

namespace boot\starter\data\mysql\base;

use boot\starter\data\mysql\base\impl\DynamicExecutor;

class InsertExecutor extends MysqlExecutorAbstract  implements DynamicExecutor
{
    private string $sql;

    private array $config;

    public function __construct(string $sql,array $config){
        $this->sql = $sql;
        $this->config = $config;
    }

    public function execute(): int
    {
        return $this->executeDynamicQuery($this->sql,$this->config);
    }
}