<?php

namespace boot\starter\data\mysql;

use mysqli;

class Repository
{
    private array $configArray = [];

    private mysqli $con;

    public function __construct(array $configArray){
        $this->configArray = $configArray;
    }

    public function Repository(string $class, string $method, array $values):array
    {
        $this->con =  $this->getConnection($this->configArray['hostname'],$this->configArray['username'],$this->configArray['password'],$this->configArray['database']);
        //sql代码
    }

    private function getConnection(string $hostname,string $username,string $password,string $database):mysqli
    {
        return mysqli_connect($hostname,$username,$password,$database);
    }
}