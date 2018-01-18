<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 5:52 PM
 */

namespace App\OperationUsageConcrete\SparePartUsage;


use App\Repositories\WarehouseRepository;
use Illuminate\Container\Container as App;

class WarehousePartUsage extends SparePartUsage
{

    public function __construct(array $attributes = [])
    {
        $WarehouseRepository = new WarehouseRepository(App::getInstance());
        $Warehouse=$WarehouseRepository->getWareHouse1();
        $this->warehouseid=$Warehouse->id;
        parent::__construct($attributes);

    }

}