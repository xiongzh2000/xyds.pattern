<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/15
 * Time: 上午9:14
 */

// 注册自加载
spl_autoload_register('autoload');

function autoload($class)
{
    require dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
}

use Singleton\Singleton;

$objA = Singleton::getInstance();
$objA->incCount();

$objB = Singleton::getInstance();
$objB->incCount();

//$objC = clone $objB;