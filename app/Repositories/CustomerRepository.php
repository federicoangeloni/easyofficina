<?php

namespace App\Repositories;

/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 4/28/17
 * Time: 5:13 PM
 */


use App\Repositories\Repository as Repository;

class CustomerRepository extends Repository {

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        // TODO: Implement getmodel() method.
        return "App\Customer";
    }


    function searchByName($name){

        return $this->model->where('name',$name)->get();

    }

}

