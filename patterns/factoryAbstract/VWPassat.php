<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/15
 * Time: 上午9:05
 */
namespace factoryAbstract;

class VWPassat implements CareInterface
{
    public function __construct()
    {
        echo 'make a Passat' . PHP_EOL;
    }
}