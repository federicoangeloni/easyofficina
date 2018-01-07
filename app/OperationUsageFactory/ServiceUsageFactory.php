<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 4:50 PM
 */

class ServiceUsageFactory extends OperationFactory
{

    /*@Override*/
    public function getServiceUsage($ServiceType,$Quantity){

        if($ServiceType == null){
            return null;
        }

        if(strcasecmp("DIAG",$ServiceType)){
            return new DiagnosticsUsage($Quantity);

        }else if(strcasecmp("TOW",$ServiceType)){
            return new TowTruckUsage($Quantity);

        }else if(strcasecmp("TIRE",$ServiceType)){
            return new TireChangeUsage($Quantity);
        }

        return null;

    }

    /*@Override*/
    public function getSparePartUsage($SparePartOrigin,$Quantity,$SparePartId){
        return null;
    }

}