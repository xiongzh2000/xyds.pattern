<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/15
 * Time: 上午9:09
 */

namespace factory;

class BMWFactoryReflection
{
    const BMW535 = 'BMW535';
    const BMW525GT = 'BMW525GT';

    public function __construct()
    {
        echo "初始化一个BMW工厂  \n";
    }

    public function produce($type)
    {

        $class = new \ReflectionClass('factory\\' . $type);//建立 这个类的反射类

        $instance = $class->newInstanceArgs();
        return $instance;
    }
}