<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/19
 * Time: 下午11:23
 */

namespace builder;

class BuilderC1 extends Builder
{
    public function __construct()
    {
        $this->product = new Product();
    }

    public function builderPart1()
    {
        $this->product->setItem('cocoa', 1);
    }

    public function builderPart2()
    {
        $this->product->setItem('juwuba', 1);
    }

}