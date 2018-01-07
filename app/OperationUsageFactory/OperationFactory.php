<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 4:47 PM
 */

abstract class OperationFactory
{
    abstract function getServiceUsageFactory($ServiceType,$Quantity);
    abstract function getSparePartUsageFactory($SparePartOrigin,$Quantity);
}