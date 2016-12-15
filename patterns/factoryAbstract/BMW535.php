<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/15
 * Time: 上午9:05
 */
namespace factoryAbstract;

class BMW535 implements CareInterface
{
    public function __construct()
    {
        echo 'make a BMW535' . PHP_EOL;
    }
}