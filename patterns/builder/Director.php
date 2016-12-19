<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/19
 * Time: 下午11:30
 */

namespace builder;

class Director
{
    public function buildFood($type)
    {
        $className = 'Builder'.$type;
        $class = new \ReflectionClass('builder\\' . $className);
        /* @var $builder  Builder*/
        $builder = $class->newInstanceArgs();
        echo $className . PHP_EOL;

        $builder->builderPart1();
        $builder->builderPart2();

        return $builder->getProduct();
    }
}
