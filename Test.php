<?php

namespace boot\starter\data\mysql;

use boot\starter\engine\attribute\Mapper;
use boot\starter\engine\attribute\SqlType;

#[Mapper("ok.xml")]
interface Test
{
    #[SqlType("select")]
    public function getTest(string $account,string $username,string $password);
}