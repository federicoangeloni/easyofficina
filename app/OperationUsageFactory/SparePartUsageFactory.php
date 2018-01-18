<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 5:34 PM
 */

namespace App\OperationUsageFactory;
use App\OperationUsageConcrete\SparePartUsage\WarehousePartUsage;

class SparePartUsageFactory extends OperationFactory
{
    /*@Override*/
    public function getServiceUsage($ServiceType){
        return null;
    }

    /*@Override*/
    public function getSparePartUsage($Warehouseid){

        if($Warehouseid==1){

            return new WarehousePartUsage();

        }

        return null;

    }

}