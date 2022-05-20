<?php

use boot\starter\data\mysql\Repository;
use boot\starter\data\mysql\Test;

include_once "vendor/autoload.php";

$config = [
    "hostname"=>"www.muyomu.com",
    "username"=>"muyomu",
    "password"=>"fysdz19980710&&",
    "database"=>"muyomu"
];

$mysql = new Repository($config);

try {
    var_dump($mysql->execute(Test::class, "getTest", array("account"=>"jdkfjsdkfjskdjfk","username" => "1731814039@qq.com","password"=>"jdkfjsklajksdjfakd")));
} catch (ReflectionException $e) {
}