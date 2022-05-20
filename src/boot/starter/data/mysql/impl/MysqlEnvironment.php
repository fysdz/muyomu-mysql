<?php

namespace boot\starter\data\mysql\impl;

interface MysqlEnvironment
{
    public function watch():void;

    public function execute(string $sql, array $values);

    public function rollback():void;

    public function commit():void;

}