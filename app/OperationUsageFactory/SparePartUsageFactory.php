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
    public function getServiceUsage($ServiceType,$Quantity){
        return null;
    }

    /*@Override*/
    public function getSparePartUsage($Warehouseid,$Quantity,$SparePartId,$jobid){

        if($Warehouseid==1){


            return new WarehousePartUsage($Quantity,$SparePartId,$jobid);


        }

        return null;

    }

}