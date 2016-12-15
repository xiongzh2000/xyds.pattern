<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/14
 * Time: 下午10:47
 */

namespace facade;

class Television extends Appliance
{

    public function on()
    {
        echo 'Television is open', PHP_EOL;
        $this->isOpen = 1;
    }

    public function off()
    {
        echo 'Television is off', PHP_EOL;
        $this->isOpen = 0;
    }
}