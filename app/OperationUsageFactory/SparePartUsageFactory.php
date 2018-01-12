<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 5:34 PM
 */

class SparePartUsageFactory extends OperationFactory
{
    /*@Override*/
    public function getServiceUsage($ServiceType,$Quantity){
        return null;
    }

    /*@Override*/
    public function getSparePartUsage($SparePartOrigin,$Quantity,$SparePartId){

        if($SparePartOrigin == null){
            return null;
        }

        if(strcasecmp("WAREHOUSE",$SparePartOrigin)){
            return new WarehousePartUsage($Quantity,$SparePartId);

        }

        return null;

    }

}