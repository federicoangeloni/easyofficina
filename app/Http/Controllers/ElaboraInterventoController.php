<?php

namespace App\Http\Controllers;

use App\Http\Observers\SparePartsObservers;
use App\Http\Observers\ServiceObservers;
use App\OperationUsageConcrete\ServiceUsage\DiagnosticsUsage;
use App\OperationUsageConcrete\ServiceUsage\ServiceUsage;
use App\OperationUsageConcrete\SparePartUsage\SparePartUsage;
use App\Repositories\ServiceUsageRepository;
use App\Repositories\SparePartUsageRepository;
use App\Repositories\OperationRepository;
use App\Repositories\ServiceRepository;
use App\Repositories\SparePartRepository;
use App\Service;
use Illuminate\Container\Container as App;
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


        $serviceUsageRepo= new ServiceUsageRepository(App::getInstance());
        $ServiceCollection= $serviceUsageRepo->getByJobId($jobid);
        $Services=[];
        foreach ($ServiceCollection as $Service){
           $Services[]=$Service->service;
       }

        $partUsageRepo= new SparePartUsageRepository(App::getInstance());
        $PartUsageCollection= $partUsageRepo->getByJobId($jobid);
        $PartUsages=[];
        foreach ($PartUsageCollection as $PartUsage){
            $PartUsages[]=$PartUsage->partusage;
        }

      return view('operations.jobOperationList',compact('jobid','Services','PartUsages'));
    }


    public function newSparePartUsage(Request $request,SparePartUsageRepository $sparepartUsageRepository){

        $operationFactoryProducer=new OperationFactoryProducer();

        $SparePartFactory = $operationFactoryProducer::getFactory('SPAREPART');

        //MUST GET VARIABLES FROM REQUEST ARRAY
        $SparePart=$SparePartFactory->getSparePartUsage($request->warehouseid);

        $SparePart->jobid=$request->jobid;
        $SparePart->sparepartid=$request->sparepartid;
        $SparePart->quantity=$request->quantity;

        $sparepartUsageRepository->savePartUsage($SparePart);

        $observer = new SparePartsObservers($SparePart->jobid, $SparePart->warehouseid, $SparePart->sparepartid,$SparePart->quantity);
        $SparePart->attach($observer);
        $SparePart->notify();
        $SparePart->detach($observer);


        //GET SERVICE AND ADD TO THE OPERATION JOB LIST
        return $this->listOperations($request->jobid);

    }

    public function newServiceUsage(Request $request,ServiceUsageRepository $serviceUsageRepository,OperationFactoryProducer $operationFactoryProducer){

        $ServiceFactory = $operationFactoryProducer::getFactory('SERVICE');

        //MUST GET VARIABLES FROM REQUEST ARRAY
        $ServiceUsage=$ServiceFactory->getServiceUsage($request->servicecode);

        $ServiceUsage->jobid=$request->jobid;
        $ServiceUsage->quantity=$request->quantity;

        $serviceUsageRepository->saveService($ServiceUsage);

        $observer = new ServiceObservers($ServiceUsage->jobid, $ServiceUsage->quantity);
        $ServiceUsage->attach($observer);
        $ServiceUsage->notify();
        $ServiceUsage->detach($observer);

        //GET SERVICE AND ADD TO THE OPERATION JOB LIST
        //$Operation=$Service->addOperation($jobid);

        return $this->listOperations($request->jobid);

    }
}
