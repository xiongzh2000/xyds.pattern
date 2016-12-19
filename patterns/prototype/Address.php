<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/19
 * Time: 下午10:38
 */

namespace prototype;

class Address extends AddressPrototype
{
    public function __construct($province, $city, $area, $addressDetail)
    {
        $this->province = $province;
        $this->city = $city;
        $this->area = $area;
        $this->addressDetail = $addressDetail;
    }

    public function setProvince($province)
    {
        $this->province = $province;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setArea($area)
    {
        $this->area = $area;
    }

    public function setDetail($detail)
    {
        $this->addressDetail = $detail;
    }

    public function myClone()
    {
        return clone $this;
    }

    public function printDetail()
    {
        echo $this->province, $this->city, $this->area, $this->addressDetail;
        echo PHP_EOL;
    }
}