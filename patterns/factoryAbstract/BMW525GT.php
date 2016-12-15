<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/15
 * Time: 上午9:08
 */

namespace factoryAbstract;

class BMW525GT implements CareInterface
{
    public function __construct()
    {
        echo 'make a  BMW525GT' . PHP_EOL;
    }
}