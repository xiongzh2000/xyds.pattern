<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 17/6/19
 * Time: 下午8:05
 */

namespace Proxy;

class DynamicProxy
{

    /* @var $subject ISubject */
    private $subject;

    public function __construct($obj)
    {
        $this->subject = $obj;

    }

    public function __call($method, $args)
    {
        $this->requestOn();
        $ret = call_user_func_array(array($this->subject, $method), $args);
        $this->requestEnd();
        return $ret;
    }

    private function requestOn()
    {
        echo date('Y-m-d H:i:s') ;
        echo ' request start ---' . PHP_EOL;
    }

    private function requestEnd()
    {
        echo 'request end ###' . PHP_EOL;
    }

}