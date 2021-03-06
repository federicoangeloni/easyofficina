<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 5:52 PM
 */

namespace App\OperationUsageConcrete\SparePartUsage;


use App\Repositories\SparePartRepository;
use App\Repositories\WarehouseRepository;
use Illuminate\Container\Container as App;

class WarehousePartUsage extends SparePartUsage
{

    public function toPartUsage()
    {
        return $this->morphMany('App\OperationUsageConcrete\SparePartUsage\SparePartUsage', 'toParentClass','parentclass_type','recordrecovery_id');
    }

    public function getPriceAttribute()
    {
        $SparePartRepository = new SparePartRepository(App::getInstance());
        return $SparePartRepository->getSparePartPrice($this->sparepartid);

    }

    public function getTotalPriceAttribute(){
        $unitprice=$this->price;
        return $this->quantity*$unitprice;
    }

    public function getWarehouseidAttribute(){
        return 1;
    }


}