<?php

namespace App\Http\Controllers;

use App\Warehouse as Warehouse;
use App\Repositories\WarehouseRepository as WarehouseRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;


class WarehouseController extends Controller
{
    /**
     * @var WarehouseRepository
     */

    public function __construct(WarehouseRepository $warehouseRepository, Warehouse $warehousemodel)
    {
        $this->ActiveRepository = $warehouseRepository;
        $this->ActiveModel = $warehousemodel;
    }


    public function getall()
    {
        $warehouses = parent::getall();
        return view('warehouses.warehouseList')->with('warehouses', $warehouses);
    }

    public function getById($id)
    {
        $warehouse = parent::getById($id);
        return view('warehouses.warehouse')->with('warehouse', $warehouse);
    }

    public function searchIndex()
    {

        return view('warehouses.searchIndex');

    }

    public function searchResult(Request $filters)
    {

        $warehouses = parent::searchResult($filters);
        if (sizeof($warehouses)==1){

            return redirect()->route('warehouse',['id'=>$warehouses[0]->id]);
        }
        else {
            return view('warehouses.warehouseList')->with('warehouses', $warehouses);
        }

    }

    public function addIndex()
    {
        return view('warehouses.addIndex');
    }


    public function add(Request $request)
    {
        $warehouse = parent::add($request);
        return view('warehouses.warehouse')->with('warehouse', $warehouse);
    }

}
