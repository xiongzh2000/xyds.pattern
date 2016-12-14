<?php

/******************************************子系统类 ************/
abstract class appliance
{
    public $isOpen;

    abstract function on();

    abstract function off();
}

class Light extends appliance
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

class AirConditioner extends appliance
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

class Television extends appliance
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

/*
 * 客户类
 */
class client
{
    static function open()
    {
        $f = SwitchFacade::getInstance();
        $f->method1(1);
    }

    static function close()
    {
        $f = SwitchFacade::getInstance();
        $f->method1(0);
    }
}

client::open();


class  Singleton {
    static  private  $_instance = null;
    private $property = null;

    private function __construct() {
        $this->property = [];
    }

    private function __clone() {}

    public static function getInstance() {
        if (!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}


