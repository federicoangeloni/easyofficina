<?php

namespace App\Http\Controllers;

use App\Repositories\CustomerRepository;
use App\Repositories\VehicleRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Repositories\JobRepository;
use App\Job;

class JobController extends Controller
{
    private $vehicleRepository;
    private $customerRepository;

    public function __construct(JobRepository $jobRepository, Job $jobmodel, CustomerRepository $customerRepository, VehicleRepository $vehicleRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
        $this->customerRepository = $customerRepository;

        $this->ActiveRepository = $jobRepository;
        $this->ActiveModel = $jobmodel;
    }


    public function getall()
    {
        $jobs = parent::getall();
        return view('jobs.jobList')->with('jobs', $jobs);
    }

    public function getById($id)
    {
        $job = parent::getById($id);

        //Get The Jobs Vehicle Name From Database
        $vehicle = $this->vehicleRepository->getById($job->vehicleid);
        //Add Vehicle Name to Job object for View
        $job->vehicle=$vehicle->model;

        //Get The Jobs Customer Name From Database
        $customer = $this->customerRepository->getById($vehicle->ownerid);
        //Add Customer Name to Job object for View
        $job->customer = $customer->name." ".$customer->surname;

        $this->ActiveRepository->calculateTotalAmount($id);

        return view('jobs.job')->with('job', $job);
    }

    public function searchIndex()
    {

        return view('jobs.searchIndex');

    }


    public function searchResult(Request $filters)
    {

        $jobs = parent::searchResult($filters);
        return view('jobs.jobList')->with('jobs', $jobs);

    }


    public function searchByVehicleID($vehicleid)
    {

        $jobs = $this->ActiveRepository->searchByVehicleId($vehicleid);
        return view('jobs.jobList')->with('jobs', $jobs);

    }

    public function addIndex($vehicleid)
    {
        $actualDate = Carbon::now()->format('d M y  H:i:s');
        return view('jobs.addIndex', compact('vehicleid', 'actualDate'));
    }

    public function add(Request $request)
    {
        $job = parent::add($request);
        return view('jobs.job')->with('job', $job);
    }

    public function delete($id)
    {
        parent::delete($id);
        return redirect()->route('joblist');
    }
}
