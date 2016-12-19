<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/19
 * Time: 下午11:16
 */

namespace builder;

class Product
{

    private $items = [];

    public function setItem($itemName, $value)
    {
        $this->items[$itemName] = $value;
    }

    public function showItems()
    {
        foreach ($this->items as $key => $val) {
            echo $key . " " . $val . PHP_EOL;
        }
        echo PHP_EOL;
    }
}