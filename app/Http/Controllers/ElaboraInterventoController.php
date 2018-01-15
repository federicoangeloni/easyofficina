<?php

namespace App\Http\Controllers;
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
        //return $jobid;
        return view('operations.sparePartList',compact('spareparts','jobid'));
    }

    public function listServices(){

    }

    public function newSparePartUsage($jobid,$warehouseid,$quantity,$sparepartid,OperationFactoryProducer $operationFactoryProducer){

        $SparePartFactory = $operationFactoryProducer::getFactory('SPAREPART');

        //MUST GET VARIABLES FROM REQUEST ARRAY
        $SparePart=$SparePartFactory->getSparePartUsage($warehouseid,$quantity,$sparepartid,$jobid);

        //GET SERVICE AND ADD TO THE OPERATION JOB LIST

        $Operation=$SparePart->addOperation();

    }

    public function newServiceUsage(Request $request){
        $ServiceFactory = \OperationFactoryProducer::getFactory('SERVICE');

        //MUST GET VARIABLES FROM REQUEST ARRAY
        $Service=$ServiceFactory->getServiceUsage('DIAG',1);

        //GET SERVICE AND ADD TO THE OPERATION JOB LIST
        $Operation=$Service->getOperation();
        $Operation->jobid=1;
        $Operation->save();

    }
}
