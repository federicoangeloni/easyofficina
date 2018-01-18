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
class DiagnosticsUsage extends ServiceUsage
{


    public $name;
    public $descrition;
    public $unit="hour";
    public $unitprice;


    public function getprice()
    {
        // TODO: Implement getprice() method.
        return ($this->unitprice*$this->quantity);
    }


    public function addOperation($jobid)
    {

        $Operation = new \App\Operation(['name' => 'Diagnostics','description'=>'',]);
        $Operation->jobid=$jobid;
        $Operation->name=$this->name;
        $Operation->description=$this->descrition;
        $Operation->quantity=$this->quantity;
        $Operation->unit=$this->unit;
        $Operation->unitprice=$this->unitprice;
        $Operation->totalprice=$this->getprice();
        $Operation->save();
        return $Operation;
        // TODO: Implement getoperation() method.

    }
}