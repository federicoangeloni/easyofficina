<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 5:52 PM
 */

namespace App\OperationUsageConcrete\SparePartUsage;

use App\Providers\AppServiceProvider;
use App\Repositories\SparePartRepository As SparePartRepository;
use Illuminate\Container\Container as App;

class WarehousePartUsage implements SparePartUsage
{

private $quantity;
private $jobid;
private $unit="pz";
private $unitprice;
private $name;
private $description;
private $warehousename;


public function __construct($quantity,$sparepartid,$jobid){

        $app=App::getInstance();
        $sparepartrepo=new SparePartRepository($app);

        $sparepart= $sparepartrepo->getById($sparepartid);


        $this->name=$sparepart->catalog['name'];
        $this->description=$sparepart->catalog['description'];
        $this->unitprice=$sparepart->catalog['unitprice'];

        $this->warehousename=$sparepart->warehouse['name'];
        $this->jobid=$jobid;
        $this->quantity=$quantity;
    }

    public function getprice()
    {
        // TODO: Implement getprice() method.
        return ($this->unitprice*$this->quantity);
    }


    public function addOperation()
    {
        $app=App::getInstance();
        $Operation = new \App\Operation();
        $Operation->jobid=$this->jobid;
        $Operation->name=$this->name;
        $Operation->description=$this->description." "."From"." ".$this->warehousename;
        $Operation->quantity=$this->quantity;
        $Operation->unit=$this->unit;
        $Operation->unitprice=$this->unitprice;
        $Operation->totalprice=$this->getprice();
        $Operation->save();
        return $Operation;
        // TODO: Implement getoperation() method.

    }

    public function notify()
    {

    }
}