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

use Proxy\Proxy;

$objTest = new Proxy('real');
$objTest->request();

//$objC = clone $objB;

echo 'Dynamic test' . PHP_EOL;

$objTest = new \Proxy\DynamicProxy(new \Proxy\RealSubject());
$objTest->request();

