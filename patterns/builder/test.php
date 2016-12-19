<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/19
 * Time: 下午10:50
 */
// 注册自加载
spl_autoload_register('autoload');

function autoload($class)
{
    require dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
}

use builder\Director;

$director = new Director();
$produce1 = $director->buildFood('C1');
$produce1->showItems();

$produce2 = $director->buildFood('C2');
$produce2->showItems();

