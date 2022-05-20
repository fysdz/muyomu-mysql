<?php

namespace boot\starter\data\mysql\base\impl;

use mysqli_result;

interface StaticExecutor
{
    public function execute(): mysqli_result;
}