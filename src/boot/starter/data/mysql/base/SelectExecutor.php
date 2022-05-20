<?php

namespace boot\starter\data\mysql\base;

use boot\starter\data\mysql\base\impl\StaticExecutor;
use mysqli_result;

class SelectExecutor extends MysqlExecutorAbstract  implements StaticExecutor
{
    private string $sql;

    private array $config;

    public function __construct(string $sql,array $config){
        $this->sql = $sql;
        $this->config = $config;
    }

    public function execute(): mysqli_result
    {
        return $this->executeStaticQuery($this->sql,$this->config);
    }
}