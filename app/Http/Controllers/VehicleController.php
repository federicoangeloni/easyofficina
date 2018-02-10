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
        return view('vehicles.vehicleList',compact('vehicles'));
    }

    public function getById($id)
    {
        $vehicle = $this->ActiveRepository->getById($id);

        return view('vehicles.vehicle',compact('vehicle'));
    }

    public function searchIndex()
    {
        return view('vehicles.searchIndex');
    }

    public function searchByOwnerId($ownerid)
    {
        $vehicles = $this->ActiveRepository->searchByOwnerId($ownerid);
        return view('vehicles.vehicleList',compact('vehicles'));
    }

    public function searchResult(Request $filters)
    {

        $vehicles = parent::searchResult($filters);
        return view('vehicles.vehicleList',compact('vehicles'));

    }

    public function addIndex($ownerid, CustomerRepository $customerRepository)
    {
        $customer=$this->customerRepository->getById($ownerid);
        $customername=$customer->name." ".$customer->surname;
        return view('vehicles.addIndex',compact('ownerid','customername'));
    }

    public function add(Request $request)
    {
        $request['matriculation'] = Carbon::createFromFormat('d/m/Y', $request->input('matriculation'))->format('d-m-y');
        $vehicle = parent::add($request);
        return redirect()->route('vehicle',['id'=>$vehicle->id]);

    }

    public function delete($id)
    {
        parent::delete($id);
        return redirect()->route('vehiclelist');

    }


}
