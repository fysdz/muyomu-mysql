<?php
/**
 * User: liumutian
 * Date: 2022/5/19/019
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\starter\engine\attribute;

use Attribute;

#[Attribute(Attribute::TARGET_PARAMETER)]
class Param
{
    private string $name;

    public function __construct(string $name){
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}