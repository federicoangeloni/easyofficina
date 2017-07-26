<?php

namespace App\Repositories;

/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 4/28/17
 * Time: 5:13 PM
 */


use App\Repositories\Repository as Repository;
use App\Customer as Customer;

class CustomerRepository extends Repository
{

    /**
     * Specify Model class name
     *
     * @return mixed
     */

    public function setmodel()
    {
        return $this->model = "App\Customer";
    }


}

