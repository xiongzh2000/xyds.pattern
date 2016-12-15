<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/15
 * Time: 上午9:09
 */

namespace factory;

class BMWFactory
{
    const BMW535 = 'BMW535';
    const BMW525GT = 'BMW525GT';

    public function __construct()
    {
        echo "初始化一个BMW工厂  \n";
    }

    public function produce($type)
    {
        switch ($type) {
            case self::BMW525GT:
                return new BMW525GT();

            case self::BMW535:
                return new BMW535();

            default:
                echo "不生产 $type 车型 \n";
        }
    }
}