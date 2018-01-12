<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 5:52 PM
 */

class DiagnosticsUsage implements ServiceUsage
{

public $quantity;
private $unit="hour";

    public function __construct($quantity){
        $this->quantity=$quantity;
        return $this->getoperation();
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

    public function getOperation()
    {
        $Operation = new \App\Operation(['name' => 'Diagnostics','description'=>'',]);
        $Operation->name='Diagnostics';
        $Operation->description='Diagnostics Description';
        $Operation->quantity=$this->quantity;
        $Operation->unit=$this->getunit();
        $Operation->unitprice=$this->getunitprice();
        $Operation->totalprice=$this->getprice();
        return $Operation;
        // TODO: Implement getoperation() method.

    }
}