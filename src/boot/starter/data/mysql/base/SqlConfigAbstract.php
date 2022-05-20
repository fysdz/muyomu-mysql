<?php

namespace boot\starter\data\mysql\base;

use boot\starter\data\mysql\base\impl\SqlConfigUtilities;
use boot\starter\system\engine\StringFactory;
use DOMDocument;
use mysqli;

abstract class SqlConfigAbstract implements SqlConfigUtilities
{
    public function generateSql(array $metaDataOfParameters, array $metaDataOfPattern, string $rowSql, array $values): string
    {
        foreach ($metaDataOfPattern as $pattern){
            $parameterName = $pattern[1];

            $parameterType = $metaDataOfParameters[$parameterName]['type'];

            if ($parameterType == "string"){
                $rowSql = preg_replace("/$pattern[0]/","\"".$values[$pattern[1]]."\"",$rowSql);
            }elseif ($parameterType == "int" || $parameterType == "float"){
                $rowSql = preg_replace("/$pattern[0]/",$values[$pattern[1]],$rowSql);
            }else{
                $rowSql = "none";
            }
        }
        return $rowSql;
    }

    public function getMysqli(array $config): mysqli
    {
        return mysqli_connect($config['hostname'],$config['username'],$config['password'],$config['database']);
    }

    public function getRawSql($configFile, string $action, string $name): string
    {
        $dom = new DOMDocument();

        $dom->load($configFile);

        $nodes = $dom->getElementsByTagName($action);

        foreach ($nodes as $node){
            if ($node->getAttribute("name") === $name){
                return preg_replace("/\r\n/","",$node->nodeValue);
            }else{
                break;
            }
        }

        return "none";
    }

    public function parseAction(\ReflectionMethod $class): string
    {
        $parser = StringFactory::getAssistantForMethodOfString($class);
        return $parser->get("#action");
    }

    public function parseInterface(\ReflectionClass $class): string
    {
        $parser = StringFactory::getAssistantForClassOfString($class);
        return $parser->get("#mapper");
    }

    public function parseParameters(\ReflectionMethod $method): array
    {
        $parameters = $method->getParameters();

        $meta = array();

        foreach ($parameters as $parameter){

            $name = $parameter->getName();

            $type = $parameter->getType();

            $meta[$name]['type'] = $type;
        }

        return $meta;
    }

    public function simpleQueryResultParse($result)
    {
        $type = gettype($result);
        if ($type == 'integer'){
            return $result;
        }else{
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
    }
}