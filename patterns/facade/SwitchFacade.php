<?php

namespace facade;

/**
 * 外观模式
 *
 */
class SwitchFacade
{

    private $_light = null;     //电灯
    private $_ac = null;     //空调
    private $_tv = null;     //电视

    private static $instance;

    static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {
        $this->_light = new Light();
        $this->_ac = new AirConditioner();
        $this->_tv = new Television();
    }

    private function __clone()
    {

    }

    /*
     * 晚上开电灯
     */
    public function method1($isOpen = 1)
    {
        if ($isOpen == 1) {
            $this->_light->on();
            $this->_ac->on();
            $this->_tv->on();
        } else {
            $this->_light->off();
            $this->_ac->off();
            $this->_tv->off();
        }
    }

    /*
     * 白天不需要电灯
     */
    public function method2($isOpen = 1)
    {
        if ($isOpen == 1) {
            $this->_ac->on();
            $this->_tv->on();
        } else {
            $this->_ac->off();
            $this->_tv->off();
        }
    }
}




