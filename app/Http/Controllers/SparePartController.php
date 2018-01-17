<?php

namespace App\Http\Controllers;

use App\Repositories\SparePartRepository as SparePartRepository;
use App\SparePart As SparePart;
use Illuminate\Http\Request;

class SparePartController extends Controller
{

    public function __construct(SparePartRepository $sparePartRepository, SparePart $sparepartmodel)
    {
        $this->ActiveRepository = $sparePartRepository;
        $this->ActiveModel = $sparepartmodel;
    }


    public function getall()
    {
        $sparepart = parent::getall();
        return view('spareparts.sparepartList')->with('spareparts', $sparepart);
    }

    public function getById($id)
    {

        $sparepart = parent::getById($id);
        return view('spareparts.sparepart')->with('sparepart', $sparepart);
    }


    public function searchIndex()
    {
        return view('spareparts.searchIndex');
    }

    public function searchResult(Request $filters)
    {

        $spareparts = parent::searchResult($filters);

        //If only one search result then open directly the customers TAB
        if (sizeof($spareparts)==1){

            return redirect()->route('spareparts',['id'=>$spareparts[0]->id]);
        }
        else {
            return view('spareparts.sparepartList')->with('spareparts', $spareparts);
        }

    }
}
