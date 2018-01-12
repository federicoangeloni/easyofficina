<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 5:52 PM
 */

class WarehousePartUsage implements ServiceUsage
{

public $quantity;
private $spid;
private $unit="pz";

    public function __construct($quantity,$sparepartid){
        $this->quantity=$quantity;
        $this->spid=$sparepartid;
    }

    public function getunitprice()
    {
        // TODO: Implement getunitprice() method. //ACCESS DATABASE FOR PRICE
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
}