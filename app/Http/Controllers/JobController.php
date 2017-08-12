<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Repositories\JobRepository;
use App\Job;

class JobController extends Controller
{
    public function __construct(JobRepository $jobRepository, Job $jobmodel)
    {
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
        return view('jobs.job')->with('job', $job);
    }

    public function searchIndex()
    {

        return view('jobs.searchIndex');

    }

    public function searchByVehicleID($vehicleid)
    {

        $jobs = $this->ActiveRepository->searchByVehicleId($vehicleid);
        return view('jobs.jobList')->with('jobs', $jobs);

    }

    public function addIndex($vehicleid)
    {
        $actualDate=Carbon::now()->format('d M y  H:i:s');
        return view('jobs.addIndex',compact('vehicleid','actualDate'));
    }

    public function add(Request $request)
    {
        $job = parent::add($request);
        return view('jobs.job')->with('job', $job);
    }


}
