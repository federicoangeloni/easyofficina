<?php

namespace App\Repositories;

/**
 * Created by PhpStorm.
 * User: federicoangeloni
 * Date: 4/28/17
 * Time: 5:13 PM
 */


use App\Repositories\Repository as Repository;
use Illuminate\Container\Container as App;
use App\Repositories\SparePartRepository as SparePartRepository;


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
        $sparePartUsageRepo = new SparePartUsageRepository(App::getInstance());
        $serviceUsageRepo = new ServiceUsageRepository(App::getInstance());
        $sparePartAmountCollection = $sparePartUsageRepo->model->where('jobid',$jobid)->select('warehouseid','sparepartid','quantity')->get();
        $serviceUsageAmountCollection = $serviceUsageRepo->model->where('jobid',$jobid)->select('serviceid','quantity')->get();
        $sparePartRepo = new SparePartRepository(App::getInstance());
        $catalogRepo = new CatalogRepository(App::getInstance());
        $totalAmount = 0;


        foreach ($sparePartAmountCollection as $sparePartAmount){
            $catalogId = $sparePartRepo->model->where('warehouseid',$sparePartAmount->warehouseid)->where('id',$sparePartAmount->sparepartid)->select('catalogid')->first();

            $unitAmount = $catalogRepo->model->where('partid',$catalogId->catalogid)->select('unitprice')->first();
            $temporaryAmount = ($unitAmount->unitprice * ($sparePartAmount->quantity));
            $totalAmount = $totalAmount + $temporaryAmount;
        }
        $this->model->where('id', $jobid)->update(['amount' => $totalAmount]);
    }

}