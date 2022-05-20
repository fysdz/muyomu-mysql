<?php

namespace boot\starter\data\mysql\base\impl;

use mysqli;

interface SqlConfigUtilities
{
    public function getMysqli(array $config):mysqli;

    public function parseParameters(\ReflectionMethod $method):array;

    public function parseInterface(\ReflectionClass $class):string;

    public function parseAction(\ReflectionMethod $class):string;

    public function generateSql(array $metaDataOfParameters,array $metaDataOfPattern,string $rowSql,array $values):string;

    public function getRawSql($configFile,string $action,string $name):string;

    public function simpleQueryResultParse($result);
}