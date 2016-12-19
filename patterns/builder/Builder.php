<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/19
 * Time: 下午11:20
 */

namespace builder;

abstract class Builder
{
    protected $product;

    public abstract function builderPart1();

    public abstract function builderPart2();

    public function getProduct()
    {
        return $this->product;
    }

}