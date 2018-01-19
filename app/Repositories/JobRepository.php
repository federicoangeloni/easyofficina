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

        //Calculate the amount of the spare parts of the job
        $sparePartUsageRepo = new SparePartUsageRepository(App::getInstance());
        $sparePartCollection=$sparePartUsageRepo->getByJobId($jobid);

        $totalAmount = 0;
        foreach ($sparePartCollection as $sparePart){
            //RECUPERA TRAMITE METODO MORPH DI LARAVEL LA CLASSE RELATIVA DAL POLIMORPHISMO
            $Part=$sparePart->partusage;
            $totalAmount = $totalAmount + $Part->total_price;
        }

        $serviceUsageRepo = new ServiceUsageRepository(App::getInstance());
        $ServiceCollection=$serviceUsageRepo->getByJobId($jobid);

        foreach ($ServiceCollection as $ServiceUsage){
            //RECUPERA TRAMITE METODO MORPH DI LARAVEL LA CLASSE RELATIVA DAL POLIMORPHISMO
            $Service=$ServiceUsage->service;
            $totalAmount = $totalAmount + $Service->total_price;
        }


//        $sparePartAmountCollection = $sparePartUsageRepo->model->where('jobid',$jobid)->select('warehouseid','sparepartid','quantity')->get();
//        $sparePartRepo = new SparePartRepository(App::getInstance());
//        $catalogRepo = new CatalogRepository(App::getInstance());
//        $totalAmount = 0;
//        foreach ($sparePartAmountCollection as $sparePartAmount){
//            $catalogId = $sparePartRepo->model->where('warehouseid',$sparePartAmount->warehouseid)->where('id',$sparePartAmount->sparepartid)->select('catalogid')->first();
//            $unitAmount = $catalogRepo->model->where('partid',$catalogId->catalogid)->select('unitprice')->first();
//            $temporaryAmount = ($unitAmount->unitprice * ($sparePartAmount->quantity));
//            $totalAmount = $totalAmount + $temporaryAmount;
//        }
//
//        //Calculate the amount of the services of the job
//        $serviceUsageRepo = new ServiceUsageRepository(App::getInstance());
//        $serviceUsageAmountCollection = $serviceUsageRepo->model->where('jobid',$jobid)->select('serviceid','quantity')->get();
//        $serviceRepo = new ServiceRepository(App::getInstance());
//        foreach ($serviceUsageAmountCollection as $serviceAmount){
//            $unitAmount = $serviceRepo->model->where('id',$serviceAmount->serviceid)->first();
//            $temporaryAmount = ($unitAmount->unitprice * ($serviceAmount->quantity));
//            $totalAmount = $totalAmount + $temporaryAmount;
//        }

        //Update the amount of the job
        $this->model->where('id', $jobid)->update(['amount' => $totalAmount]);
    }

}