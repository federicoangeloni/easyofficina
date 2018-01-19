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
use App\Service;

class ServiceUsageRepository extends Repository
{

    /**
     * Specify Model class name
     *
     * @return mixed
     */

    public function setmodel()
    {
        return $this->model = "App\OperationUsageConcrete\ServiceUsage\ServiceUsage";
    }

    public function getByJobId($jobid){
         return $this->model->with(['service_details'])->where('jobid',$jobid)->get();
       // $Services =parent::search(array('jobid'=>$jobid));
     //   return  $Services;
    }
    public function saveService($ServiceUsage){

        $SavedService=$ServiceUsage->services()->save($ServiceUsage);

          $Service=parent::getById($SavedService->id);
          $Service->service_id=$Service->id;
          $Service->save();

    }




}

