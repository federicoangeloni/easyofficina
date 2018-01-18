<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 5:52 PM
 */

namespace App\OperationUsageConcrete\ServiceUsage;

class TireChangeUsage extends ServiceUsage
{

public $quantity;
private $unit="pz";

    public function __construct($quantity){
        $this->quantity=$quantity;
    }

    public function getunitprice()
    {
        // TODO: Implement getunitprice() method.
        return 300;
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


    public function addOperation($jobid)
    {
        $Operation = new \App\Operation(['name' => 'Diagnostics', 'description' => '',]);
        $Operation->jobid = $jobid;
        $Operation->name = 'TireChange Service';
        $Operation->description = 'TireChange Description';
        $Operation->quantity = $this->quantity;
        $Operation->unit = $this->getunit();
        $Operation->unitprice = $this->getunitprice();
        $Operation->totalprice = $this->getprice();
        $Operation->save();
        return $Operation;
    }
        // TODO: Implement getoperation() method.

        //MAY HAVE SOME SORT OF DISCOUNT POLICY ANOTHER FUNCTION

}