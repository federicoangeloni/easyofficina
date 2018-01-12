<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElaboraInterventoController extends Controller
{


    public function listSpareParts(){

    }

    public function listServices(){

    }

    public function newSparePartUsage(Request $request){
        $ServiceFactory = \OperationFactoryProducer::getFactory('SPAREPART');

        //MUST GET VARIABLES FROM REQUEST ARRAY
        $Service=$ServiceFactory->getSparePartUsage('Warehouse',1,12);

        //GET SERVICE AND ADD TO THE OPERATION JOB LIST
        $Operation=$Service->getOperation();
        $Operation->jobid=1;
        $Operation->save();
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
