<?php

namespace App\Repositories;

/**
 * Created by PhpStorm.
 * User: federicoangeloni
 * Date: 4/28/17
 * Time: 5:13 PM
 */


use App\Repositories\Repository as Repository;
use App\Job as Job;

class JobRepository extends Repository
{

    /**
     * Specify Model class name
     *
     * @return mixed
     */

    public function setmodel()
    {
        return $this->model = "App\Job";
    }

    public function searchByVehicleId($vehicleid)
    {
        $query = array();
        $key = 'vehicleid';
        $query[] = array($key, 'LIKE', "%$vehicleid%");
        return $this->model->where($query)->get();
    }

    public function calculateTotalAmount($jobid){
        $sparePartUsageRepo = new SparePartUsageRepository();
        $serviceUsageRepo = new ServiceUsageRepository();
        $sparePartAmountCollection = $sparePartUsageRepo->model->where('id',$jobid)->select('warehouseid','sparepartid','quantity')->get();
        $serviceUsageAmountCollection = $serviceUsageRepo->model->where('id',$jobid)->select('serviceid','quantity')->get();
        foreach ($sparePartAmountCollection as $sparePartAmount){
            echo $sparePartAmount;
        }

        $this->model->where('jobid',$warehouseid)->where('id',$spareid)->first()

    }

    /*public function updateAmount($jobid, $cost){
        $oldquantity = $this->model->where('id',$spareid)->where('warehouseid',$warehouseid)->first();
        $newquantity = ($oldquantity->quantity)-$quantity;
        $this->model->where('warehouseid',$warehouseid)->where('id',$spareid)->first()->update(['quantity' => $newquantity]);
    }*/
}