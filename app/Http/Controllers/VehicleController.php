<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Repositories\CustomerRepository as CustomerRepository;
use App\Repositories\VehicleRepository as VehicleRepository;
use App\Vehicle;
use Carbon\Carbon;
use Illuminate\Http\Request;


class VehicleController extends Controller
{
    /**
     * @var VehicleRepository
     */
    private $customerRepository;

    public function __construct(VehicleRepository $vehicleRepository, Vehicle $vehiclemodel, CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
        $this->ActiveRepository = $vehicleRepository;
        $this->ActiveModel = $vehiclemodel;
    }


    public function getall()
    {
        $vehicles = parent::getall();
        return view('vehicles.vehicleList')->with('vehicles', $vehicles);
    }

    public function getById($id)
    {
        $vehicle = parent::getById($id);
        //Get Vehicles Customer Name From Database
        $customer = $this->customerRepository->getById($vehicle->ownerid);
        //Add customer name to the vehicle object for the view
        $vehicle->customer = $customer->name." ".$customer->surname;

        return view('vehicles.vehicle')->with('vehicle',$vehicle);
    }

    public function searchIndex()
    {
        return view('vehicles.searchIndex');
    }

    public function searchByOwnerId($ownerid)
    {
        $vehicles = $this->ActiveRepository->searchByOwnerId($ownerid);
        return view('vehicles.vehicleList')->with('vehicles', $vehicles);
    }

    public function searchResult(Request $filters)
    {

        $vehicles = parent::searchResult($filters);
        return view('vehicles.vehicleList')->with('vehicles', $vehicles);

    }

    public function addIndex($ownerid)
    {
        return view('vehicles.addIndex')->with('ownerid', $ownerid);
    }

    public function add(Request $request)
    {
        $request['matriculation'] = Carbon::createFromFormat('d/m/Y', $request->input('matriculation'))->format('d/m/Y');
        $vehicle = parent::add($request);
        return view('vehicles.vehicle')->with('vehicle', $vehicle);
    }

    public function delete($id)
    {
        parent::delete($id);
        return redirect()->route('vehiclelist');

    }


}
