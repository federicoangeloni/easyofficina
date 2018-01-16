<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 7:36 PM
 */

namespace App\OperationUsageFactory;

class OperationFactoryProducer
{
    public static function getFactory($choice)
    {

        if (strcasecmp("SERVICE", $choice)==0) {

            return new ServiceUsageFactory();
        } elseif (strcasecmp("SPAREPART", $choice)==0) {

            return new SparePartUsageFactory();
        }

        return null;

    }

}