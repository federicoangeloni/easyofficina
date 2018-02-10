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
        $job = $this->ActiveRepository->getById($id);

        $this->ActiveRepository->calculateTotalAmount($id);

        return view('jobs.job')->with('job', $job[0]);
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
        return view('jobs.jobListCustomer')->with('jobs', $jobs);

    }

    public function addIndex($vehicleid)
    {
        $actualDate = Carbon::now()->format('d M y  H:i:s');
        return view('jobs.addIndex', compact('vehicleid', 'actualDate'));
    }

    public function add(Request $request)
    {
        $job = parent::add($request);
        //return redirect()->route('job',['id'=>$job->id]);
        return view('jobs.job')->with('job', $job);
    }

    public function delete($id)
    {
        parent::delete($id);
        return redirect()->route('joblist');
    }

    public function closeJob($id){
        $this->ActiveRepository->closeJob($id);
        return redirect()->route('joblist');
    }
}
