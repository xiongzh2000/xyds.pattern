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

use factory\BMWFactoryReflection;

$bmw = new BMWFactoryReflection();

$bmw->produce($bmw::BMW535);
$bmw->produce($bmw::BMW525GT);
//$bmw->produce('BMW760');

