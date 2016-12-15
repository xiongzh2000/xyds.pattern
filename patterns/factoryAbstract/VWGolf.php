<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/15
 * Time: 上午9:05
 */
namespace factoryAbstract;

class VWGolf implements CareInterface
{
    public function __construct()
    {
        echo 'make a Golf' . PHP_EOL;
    }
}