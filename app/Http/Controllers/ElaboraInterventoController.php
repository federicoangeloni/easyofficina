<?php

namespace App\Http\Controllers;

use App\Http\Observers\SparePartsObservers;
use Illuminate\Container\Container as App;
use App\Repositories\OperationRepository;
use App\Repositories\ServiceRepository;
use App\Repositories\SparePartRepository;
use App\OperationUsageFactory\OperationFactoryProducer;
use Illuminate\Http\Request;

class ElaboraInterventoController extends Controller
{


    public function newOperationIndex($jobid){
        return view('operations.addIndex')->with('jobid',$jobid);
    }

    public function listSpareParts($jobid,SparePartRepository $sparePartRepository)
    {

        $spareparts = $sparePartRepository->getall();

        return view('operations.sparePartList',compact('spareparts','jobid'));
    }

    public function listServices($jobid,ServiceRepository $serviceRepository){
        $services = $serviceRepository->getall();

        return view('operations.servicesList',compact('services','jobid'));
    }

    public function listOperations($jobid){

        $operationRepository = new OperationRepository(App::getInstance());

        $operations = $operationRepository->getJobOperations($jobid);

        return view('operations.jobOperationList',compact('operations','jobid'));
    }


    public function newSparePartUsage(Request $request){

        $jobid=$request->jobid;
        $warehouseid=$request->warehouseid;
        $sparepartid=$request->sparepartid;
        $quantity=$request->quantity;

        $operationFactoryProducer=new OperationFactoryProducer();

        $SparePartFactory = $operationFactoryProducer::getFactory('SPAREPART');

        //MUST GET VARIABLES FROM REQUEST ARRAY
        $SparePart=$SparePartFactory->getSparePartUsage($warehouseid,$quantity,$sparepartid,$jobid);

        //MUST ATTACH THE OBSERVER TO THE NEW SPARE PART USAGE
        $observer = new SparePartsObservers($warehouseid,$sparepartid,$quantity);
        $SparePart->attach($observer);

        //GET SERVICE AND ADD TO THE OPERATION JOB LIST

        $Operation=$SparePart->addOperation();

        $SparePart->notify();
        $SparePart->detach($observer);

        return $this->listOperations($jobid);

    }

    public function newServiceUsage(Request $request,OperationFactoryProducer $operationFactoryProducer){
        $serviceid=$request->servicecode;
        $jobid=$request->jobid;
        $quantity=$request->quantity;

        $ServiceFactory = $operationFactoryProducer::getFactory('SERVICE');

        //MUST GET VARIABLES FROM REQUEST ARRAY
        $Service=$ServiceFactory->getServiceUsage($serviceid,$quantity);

        //GET SERVICE AND ADD TO THE OPERATION JOB LIST
        $Operation=$Service->addOperation($jobid);

        return $this->listOperations($jobid);

    }
}
