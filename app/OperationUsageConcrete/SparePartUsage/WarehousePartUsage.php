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

public $quantity;
public $jobid;
private $spid;
private $unit="pz";


public function __construct($quantity,$sparepartid,$jobid){

        $this->jobid=$jobid;
        $this->quantity=$quantity;
        $this->spid=$sparepartid;
    }

    public function getunitprice()
    {
        $app=App::getInstance();
        $sparepartrepo=new SparePartRepository($app);
        $sparepart= $sparepartrepo->getById($this->spid);
        return $sparepart->catalog['unitprice'];

    }

    public function getprice()
    {
        // TODO: Implement getprice() method.
        return ($this->getunitprice()*$this->quantity);
    }

    public function getunit()
    {
        // TODO: Implement getunit() method.
        return $this->unit;
    }

    public function addOperation()
    {
        $Operation = new \App\Operation(['name' => 'Diagnostics','description'=>'',]);
        $Operation->jobid=$this->jobid;
        $Operation->name='SparePart Usage';
        $Operation->description='Usage Of Spare Part From Warehouse 1';
        $Operation->quantity=$this->quantity;
        $Operation->unit=$this->getunit();
        $Operation->unitprice=$this->getunitprice();
        $Operation->totalprice=$this->getprice();
        $Operation->save();
        return $Operation;
        // TODO: Implement getoperation() method.

    }
}