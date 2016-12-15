<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/15
 * Time: 上午9:09
 */

namespace factoryAbstract;

class VWFactory
{
    const VWGOLF = 'VWGolf';
    const VWPASSAT = 'VWPassat';

    public function __construct()
    {
        echo "初始化一个VW工厂  \n";
    }

    public function produce($type)
    {
        switch ($type) {
            case self::VWGOLF:
                return new VWGolf();

            case self::VWPASSAT:
                return new VWPassat();

            default:
                echo "vw不生产 $type 车型 \n";
        }
    }
}