<?php
/**
 * Created by PhpStorm.
 * User: Federico
 * Date: 17/01/2018
 * Time: 23:38
 */

namespace App\Http\Observers;
use Illuminate\Container\Container as App;
use App\Repositories\SparePartRepository as SparePartRepository;
use App\Repositories\JobRepository as JobRepository;



class SparePartsObservers implements \SplObserver
{
    protected $warehouseid;
    protected $sparepartid;
    protected $quantity;

    public function __construct($jobid, $warehouseid, $sparepartid, $quantity) {
        $this->jobid = $jobid;
        $this->warehouseid = $warehouseid;
        $this->sparepartid = $sparepartid;
        $this->quantity = $quantity;
        return $this;
    }


    public function update(\SplSubject $subject)
    {
        //Update the Warehouse availability
        $sparePartsRepo = new SparePartRepository(App::getInstance());
        $sparePartsRepo->updateQuantity($subject->sparepartid,$subject->warehouseid,$subject->quantity);

        //Update the Amount of the Job
        $jobsRepo = new JobRepository(App::getInstance());
        $jobsRepo->calculateTotalAmount($subject->jobid);
    }
}