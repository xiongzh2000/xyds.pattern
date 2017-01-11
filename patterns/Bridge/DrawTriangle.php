<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/20
 * Time: 下午11:01
 */

namespace bridge;

class DrawTriangle implements DrawSymbolInterface
{
    public function draw()
    {
        echo 'paint a draw' . PHP_EOL;
    }

}