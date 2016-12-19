<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/19
 * Time: 下午10:33
 */

namespace prototype;

abstract class AddressPrototype
{
    protected $province;
    protected $city;
    protected $area;
    protected $addressDetail;


    abstract function myClone();
}