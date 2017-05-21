<?php

namespace App\Repositories;

/**
 * Created by PhpStorm.
 * User: federicoangeloni
 * Date: 4/28/17
 * Time: 5:13 PM
 */


use App\Repositories\Repository as Repository;
use App\Vehicle as Vehicle;

class VehicleRepository extends Repository {

    /**
     * Specify Model class name
     *
     * @return mixed
     */

    public function setmodel(){
       return $this->model= "App\Vehicle";
    }

    public function searchByOwnerId($ownerid){
        $query=array();
        $key = 'ownerid';
        $query[]=array($key,'LIKE',"%$ownerid%");
        return  $this->model->where($query)->get();
    }


}

