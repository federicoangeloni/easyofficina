<?php

namespace App\Repositories;


use App\Repositories\Repository as Repository;
use App\Vehicle as Vehicle;

class VehicleRepository extends Repository
{

    public function setmodel()
    {
        return $this->model = "App\Vehicle";
    }

    public function getById($id){


        $query = array();
        $key = 'id';
        $query[] = array($key, '=', $id);
        return $this->model->where($query)->with('customer')->get()[0];

    }

    public function searchByOwnerId($ownerid)
    {
        $query = array();
        $key = 'ownerid';
        $query[] = array($key, 'LIKE', "%$ownerid%");
        return $this->model->where($query)->with('customer')->get();
    }


}

