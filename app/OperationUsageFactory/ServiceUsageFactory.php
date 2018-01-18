<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 4:50 PM
 */

namespace App\OperationUsageFactory;
use App\OperationUsageConcrete\ServiceUsage\DiagnosticsUsage As DiagnosticsUsage;
use App\OperationUsageConcrete\ServiceUsage\TowTruckUsage;
use App\OperationUsageConcrete\ServiceUsage\TireChangeUsage;

class ServiceUsageFactory extends OperationFactory
{

    /*@Override*/
    public function getServiceUsage($ServiceType){

        if($ServiceType == null){
            return null;
        }

        if(strcasecmp("DIAG", $ServiceType)==0){
            return new DiagnosticsUsage();

        }else if(strcasecmp("TIRE", $ServiceType)==0){
            return new TireChangeUsage();

        }else if(strcasecmp("TOW", $ServiceType)==0){
            return new TowTruckUsage();
        }

        return null;

    }

    /*@Override*/
    public function getSparePartUsage($SparePartOrigin){
        return null;
    }

}