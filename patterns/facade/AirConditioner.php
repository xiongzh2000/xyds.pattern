<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/14
 * Time: 下午10:46
 */
namespace facade;

class AirConditioner extends Appliance
{
    public function on()
    {
        echo 'AirConditioner is open', PHP_EOL;
        $this->isOpen = 1;
    }

    public function off()
    {
        echo 'AirConditioner is off', PHP_EOL;
        $this->isOpen = 0;
    }
}
