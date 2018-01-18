<?php

namespace App\Http\Controllers;

use App\Http\Observers\SparePartsObservers;
use App\Repositories\ServiceUsageRepository;
use App\Repositories\SparePartUsageRepository;
use App\Service;
use Illuminate\Container\Container as App;
use App\Repositories\OperationRepository;
use App\Repositories\ServiceRepository;
use App\Repositories\SparePartRepository;
use App\OperationUsageFactory\OperationFactoryProducer;
use Illuminate\Http\Request;

use App\OperationUsageConcrete\ServiceUsage;
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



        return view('operations.jobOperationList',compact('jobid'));
    }


    public function newSparePartUsage(Request $request,SparePartUsageRepository $sparepartUsageRepository){

        $operationFactoryProducer=new OperationFactoryProducer();

        $SparePartFactory = $operationFactoryProducer::getFactory('SPAREPART');

        //MUST GET VARIABLES FROM REQUEST ARRAY
        $SparePart=$SparePartFactory->getSparePartUsage($request->sparepartid);

        $SparePart->jobid=$request->jobid;
        $SparePart->sparepartid=$request->sparepartid;
        $SparePart->warehouseid=$request->warehouseid;
        $SparePart->quantity=$request->quantity;

        $sparepartUsageRepository->insert($SparePart);

        $observer = new SparePartsObservers($SparePart->jobid, $SparePart->warehouseid, $SparePart->sparepartid,$SparePart->quantity);
        $SparePart->attach($observer);
        $SparePart->notify();

        //GET SERVICE AND ADD TO THE OPERATION JOB LIST

        return $this->listOperations($request->jobid);

    }

    public function newServiceUsage(Request $request,ServiceUsageRepository $serviceUsageRepository,OperationFactoryProducer $operationFactoryProducer){
        $servicecode=


        $ServiceFactory = $operationFactoryProducer::getFactory('SERVICE');

        //MUST GET VARIABLES FROM REQUEST ARRAY
        $ServiceUsage=$ServiceFactory->getServiceUsage($request->servicecode);


        $ServiceUsage->serviceid=$request->serviceid;
        $ServiceUsage->jobid=$request->jobid;
        $ServiceUsage->quantity=$request->quantity;

        $serviceUsageRepository->insert($ServiceUsage);



        //GET SERVICE AND ADD TO THE OPERATION JOB LIST
        //$Operation=$Service->addOperation($jobid);

        return $this->listOperations($request->jobid);

    }
}
