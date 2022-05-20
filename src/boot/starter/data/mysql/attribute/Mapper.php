<?php
/**
 * User: liumutian
 * Date: 2022/5/19/019
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\starter\engine\attribute;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class Mapper
{
    private string $applicationXml;

    public function __construct(string $applicationXml = 'application.xml')
    {
        $this->applicationXml = $applicationXml;
    }

    /**
     * @return string
     */
    public function getApplicationXml(): string
    {
        return $this->applicationXml;
    }


}