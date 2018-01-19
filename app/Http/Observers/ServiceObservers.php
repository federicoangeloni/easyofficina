<?php
/**
 * Created by PhpStorm.
 * User: Federico
 * Date: 17/01/2018
 * Time: 23:38
 */

namespace App\Http\Observers;
use Illuminate\Container\Container as App;
use App\Repositories\JobRepository as JobRepository;


class ServiceObservers implements \SplObserver
{
    protected $serviceid;
    protected $quantity;

    public function __construct($serviceid, $quantity) {
        $this->serviceid = $serviceid;
        $this->quantity = $quantity;
        return $this;
    }


    public function update(\SplSubject $subject)
    {
        //Update the Amount of the Job
        $jobsRepo = new JobRepository(App::getInstance());
        $jobsRepo->calculateTotalAmount($subject->jobid);
    }
}