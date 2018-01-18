<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 5:52 PM
 */

namespace App\OperationUsageConcrete\ServiceUsage;

use App\Repositories\ServiceRepository;
use Illuminate\Container\Container as App;

class TowTruckUsage extends ServiceUsage
{

    public function getunitprice()
    {
        $ServiceRepository = new ServiceRepository(App::getInstance());
        $Service=$ServiceRepository->getTowTruckService();
        return $Service->unitprice;
    }

    public function gettotalprice(){
        $unitprice=$this->getunitprice();
        return $this->quantity*$unitprice;
    }
}