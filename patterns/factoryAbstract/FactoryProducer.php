<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/15
 * Time: 下午10:22
 */

namespace factoryAbstract;

class FactoryProducer
{
    public function getCardFactory($bind)
    {
        switch ($bind)
        {
            case 'VW':
                return new VWFactory();
            case 'BMW':
                return new BMWFactory();
            default :
                echo 'Don\'t have this facroty' . PHP_EOL;

        }
    }
}