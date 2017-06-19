<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/15
 * Time: 上午9:08
 */

namespace factory;

class BMW525GT implements CarInterface
{
    public function __construct()
    {
        echo 'make a  BMW525GT' . PHP_EOL;
    }
}