<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/14
 * Time: 下午9:08
 */
namespace facade;

abstract class Appliance
{
    public $isOpen;

    abstract function on();

    abstract function off();
}