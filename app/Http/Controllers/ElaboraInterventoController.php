<?php

namespace App\Http\Controllers;

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

        //GET SERVICE AND ADD TO THE OPERATION JOB LIST

        $Operation=$SparePart->addOperation();

        return $this->listOperations($jobid);

    }

    public function newServiceUsage(Request $request,OperationFactoryProducer $operationFactoryProducer){
        $servicecode=


        $ServiceFactory = $operationFactoryProducer::getFactory('SERVICE');

        //MUST GET VARIABLES FROM REQUEST ARRAY
        $ServiceUsage=$ServiceFactory->getServiceUsage($request->servicecode);


        $ServiceUsage->serviceid=$request->serviceid;
        $ServiceUsage->jobid=$request->jobid;
        $ServiceUsage->quantity=$request->quantity;
        $ServiceUsage->save();



        //GET SERVICE AND ADD TO THE OPERATION JOB LIST
        //$Operation=$Service->addOperation($jobid);

        return $this->listOperations($request->jobid);

    }
}
