<?php

namespace App\Repositories;

/**
 * Created by PhpStorm.
 * User: federicoangeloni
 * Date: 4/28/17
 * Time: 5:13 PM
 */


use App\Repositories\Repository as Repository;
use App\Catalog as Catalog;

class CatalogRepository extends Repository
{

    /**
     * Specify Model class name
     *
     * @return mixed
     */

    public function setmodel()
    {
        return $this->model = "App\Catalog";
    }

    public function getById($partid)
    {
        return $this->model->where('partid',$partid)->first();
    }

}