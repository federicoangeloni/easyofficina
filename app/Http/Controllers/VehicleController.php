<?php

namespace App\Http\Controllers;

use App\Customer as Customer;
use App\Repositories\CustomerRepository as CustomerRepository;
use App\Repositories\VehicleRepository as VehicleRepository;
use App\Vehicle;
use Illuminate\Http\Request;


class VehicleController extends Controller
{
    /**
     * @var VehicleRepository
     */

    public function __construct(VehicleRepository $vehicleRepository,Vehicle $vehiclemodel) {
        $this->ActiveRepository = $vehicleRepository;
        $this->ActiveModel = $vehiclemodel;
    }


    public function getall()
    {
        $vehicles= parent::getall();
        return view('vehicles.vehicleList')->with('vehicles',$vehicles);
    }

    public function getById($id){
        $vehicle = parent::getById($id);
        return view('vehicles.vehicle')->with('vehicle',$vehicle);
    }

    public function searchIndex(){
        return view('vehicles.searchIndex');
    }

    public function searchByOwnerId($ownerid){
        $vehicles = $this->ActiveRepository->searchByOwnerId($ownerid);
        return view('vehicles.vehicleList')->with('vehicles',$vehicles);
    }

    public function searchResult(Request $filters){

       $vehicles = parent::searchResult($filters);
       return view('vehicles.vehicleList')->with('vehicles',$vehicles);

    }

    public function addIndex($ownerid){
        return view('vehicles.addIndex')->with('ownerid',$ownerid);
    }

    public function add(Request $request){
        $vehicle = parent::add($request);
        return view('vehicles.vehicle')->with('vehicle',$vehicle);
    }





}
