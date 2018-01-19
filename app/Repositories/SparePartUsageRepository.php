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

class SparePartUsageRepository extends Repository
{

    /**
     * Specify Model class name
     *
     * @return mixed
     */

    public function setmodel()
    {
        return $this->model = "App\OperationUsageConcrete\SparePartUsage\SparePartUsage";
    }

    public function getByJobId($jobid){
        $PartUsages =$this->model->with('sparepart.catalog')->where('jobid',$jobid)->get();
        return $PartUsages;
    }

    public function savePartUsage($PartUsage){

        $SavedPartUsage=$PartUsage->partusages()->save($PartUsage);

        $Part=parent::getById($SavedPartUsage->id);
        $Part->partusage_id=$Part->id;
        $Part->save();

    }




}

