<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 17/6/19
 * Time: 下午8:15
 */

namespace Proxy;

class RealSubject implements ISubject
{
    public function request()
    {
        //具体业务
        echo " ***  real subject ***" . PHP_EOL;
        return true;
    }
}