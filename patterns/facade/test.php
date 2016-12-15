<?php

// 注册自加载
spl_autoload_register('autoload');


function autoload($class)
{
    require dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
}

use facade\SwitchFacade;

/*
 * 客户类
 */
class client
{
    static function open()
    {
        $f = SwitchFacade::getInstance();
        $f->method1(1);
    }

    static function close()
    {
        $f = SwitchFacade::getInstance();
        $f->method1(0);
    }
}

client::open();
