<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 7:36 PM
 */

class OperationFactoryProducer
{
    public static function getFactory($choice)
    {

        if (strcasecmp("SERVICE", $choice)) {

            return new ServiceUsageFactory();
        } elseif (strcasecmp("SPAREPART", $choice)) {

            return new SparePartUsageFactory();
        }

        return null;

    }

}