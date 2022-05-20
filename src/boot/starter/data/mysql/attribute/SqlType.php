<?php
/**
 * User: liumutian
 * Date: 2022/5/19/019
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\starter\engine\attribute;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class SqlType
{
    private string $sqlType;

    public function __construct(string $sqlType)
    {
        $this->sqlType = $sqlType;
    }

    /**
     * @return string
     */
    public function getSqlType(): string
    {
        return $this->sqlType;
    }


}