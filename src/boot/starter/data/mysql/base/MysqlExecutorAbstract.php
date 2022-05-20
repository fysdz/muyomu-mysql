<?php

namespace boot\starter\data\mysql\base;

use boot\starter\data\mysql\base\impl\MysqlExecutor;
use mysqli_result;

abstract class MysqlExecutorAbstract extends SqlConfigAbstract implements MysqlExecutor
{
    public function executeDynamicQuery(string $statement, array $config): int
    {
        $con = $this->getMysqli($config);

        mysqli_query($con,"set names utf8;");

        $count = mysqli_affected_rows($con);

        mysqli_close($con);

        return $count;
    }

    public function executeStaticQuery(string $statement, array $config): mysqli_result
    {
        $con = $this->getMysqli($config);

        mysqli_query($con,"set names utf8;");

        $mysqli_result =  mysqli_query($con,$statement);

        mysqli_close($con);

        return $mysqli_result;
    }
}