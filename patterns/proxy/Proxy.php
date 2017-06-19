<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 17/6/19
 * Time: 下午8:05
 */

namespace Proxy;

class Proxy
{

    /* @var $subject ISubject */
    private $subject;

    public function __construct($type)
    {
        if ($type == 'real') {
            $this->subject = new RealSubject();
        } else {
            throw new \Exception();
        }
    }


    public function request()
    {
        $this->requestOn();
        $ret = $this->subject->request();
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