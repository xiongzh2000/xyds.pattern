<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 17/1/15
 * Time: 上午9:47
 */

// 注册自加载
spl_autoload_register('autoload');

function autoload($class)
{
    require dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
}
