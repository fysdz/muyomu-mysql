<?php

namespace boot\starter\data\mysql\base\impl;

interface DynamicExecutor
{
    public function execute():int;
}