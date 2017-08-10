<?php

require_once ('config.php');
require_once ('lib/Sql.php');

try
{
    $result = new sql();
    $distinct = $result->distinct(" key,value")->from("MY_TEST")->execute();
    $innerJoin = $result->select('MY_TEST.value')->from('MY_TEST')->join('INNER', 'TEST', 'TEST.key = MY_TEST.key')->execute();
    $leftJoin = $result->select('MY_TEST.value')->from('MY_TEST')->join('LEFT', 'TEST', 'TEST.key = MY_TEST.key')->execute();
    $rightJoin = $result->select('MY_TEST.value')->from('MY_TEST')->join('RIGHT', 'TEST', 'TEST.key = MY_TEST.key')->execute();
    $crossJoin = $result->select('MY_TEST.value')->from('MY_TEST')->join('CROSS', 'TEST')->execute();
    $naturalJoin = $result->select('MY_TEST.value')->from('MY_TEST')->join('NATURAL', 'TEST')->execute();
    $group = (new sql())->select("key,value")->from('MY_TEST')->group('key')->execute();
    $having = (new sql())->select("key,value")->from('MY_TEST')->group('key')->having('COUNT', 'key', ' = ', ' 2')->execute();
    $order = (new sql())->select("key,value")->from('MY_TEST')->order('key',true)->execute();
    $limit = (new sql())->select("key,value")->from('MY_TEST')->limits(1)->execute();
}
catch (Exception $e)
{
    $error = $e->getMessage();
}

require_once ('templates/index.php');
