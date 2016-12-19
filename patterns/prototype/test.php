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

use prototype\Address;

$address1 = new Address('浙江', '杭州', '西湖区', '文三路478华星广场');
$address1->printDetail();

$address2 = $address1->myClone();
$address2->setDetail('学院路77号黄龙万科中心');
$address2->printDetail();


