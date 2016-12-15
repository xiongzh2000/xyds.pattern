<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/14
 * Time: 下午10:48
 */
namespace facade;

class Light extends Appliance
{
    public function on()
    {
        echo 'Light is open', PHP_EOL;
        $this->isOpen = 1;
    }

    public function off()
    {
        echo 'Light is off', PHP_EOL;
        $this->isOpen = 0;
    }
}