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
        $Services =parent::search(array('jobid'=>$jobid));
        return $Services;
    }




}
