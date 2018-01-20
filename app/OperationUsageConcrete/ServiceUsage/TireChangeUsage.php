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

class TireChangeUsage extends ServiceUsage
{

    public function __construct(array $attributes = [])
    {
        $ServiceRepository = new ServiceRepository(App::getInstance());
        $Service=$ServiceRepository->getTireChangeService();
        $this->serviceid=$Service->id;
        parent::__construct($attributes);

    }

    public function toService()
    {
        return $this->morphOne('App\OperationUsageConcrete\ServiceUsage\ServiceUsage', 'toParentService','parentclass_type','recordrecovery_id');
    }

    public function getPriceAttribute()
    {
        $ServiceRepository = new ServiceRepository(App::getInstance());
        $Service=$ServiceRepository->getTireChangeService();
        return $Service->unitprice;
    }

    public function getTotalPriceAttribute(){
        $unitprice=$this->price;
        return $this->quantity*$unitprice;
    }
}