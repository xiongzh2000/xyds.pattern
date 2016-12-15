<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/15
 * Time: 下午10:49
 */
namespace Singleton;

class Singleton
{
    private static $instance;
    private $count;

    private function __construct()
    {
        $this->count = 0;
    }

    private function __clone()
    {
        echo __CLASS__ . 'not allow clone' . PHP_EOL;
    }

    public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function incCount()
    {
        echo ++$this->count . PHP_EOL;
    }
}