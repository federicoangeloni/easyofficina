<?php

namespace App\Repositories;

/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 4/28/17
 * Time: 5:13 PM
 */


use App\Repositories\Repository as Repository;
use Illuminate\Container\Container as App;

class SparePartRepository extends Repository
{

    /**
     * Specify Model class name
     *
     * @return mixed
     */

    public function setmodel()
    {
        return $this->model = "App\SparePart";
    }

    public function getall(){
        return $this->model->with(['catalog','warehouse'])->get();
    }

    public function getById($id){

        return $this->model->with(['catalog','warehouse'])->find($id);
    }

    public function getQuantity($spareid,$warehouseid){
        $sparepart = $this->model->where('warehouseid',$warehouseid)->where('catalogid',$spareid);
        $quantity = $sparepart->quantity;
    }


    public function updateQuantity($spareid,$warehouseid,$quantity){
        $oldquantity = $this->getQuantity($spareid,$warehouseid);
        $newquantity = $oldquantity-$quantity;
        $this->model->where('warehouseid',$warehouseid)->where('catalogid',$spareid)->update('quantity',$newquantity);
    }




}

