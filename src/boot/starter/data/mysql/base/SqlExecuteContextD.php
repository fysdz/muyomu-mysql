<?php

namespace boot\starter\data\mysql\base;

use boot\starter\data\mysql\base\impl\DynamicExecutor;

class SqlExecuteContextD
{
    private DynamicExecutor $executor;

    public function __construct(DynamicExecutor $executor){
        $this->executor = $executor;
    }
}