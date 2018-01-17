<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 4:47 PM
 */

namespace App\OperationUsageFactory;

abstract class OperationFactory
{
    abstract function getServiceUsage($ServiceType,$Quantity);
    abstract function getSparePartUsage($SparePartOrigin,$Quantity,$SparePartId,$jobid);
}