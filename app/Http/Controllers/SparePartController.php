<?php

namespace App\Http\Controllers;

use App\Repositories\SparePartRepository;
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
        return $sparepart;
        //return view('customers.customerList')->with('customers', $sparepart);
    }

    public function getById($id)
    {
        $sparepart = parent::getById($id);
        return $sparepart;
        //return view('customers.customer')->with('customer', $sparepart);
    }

    public function searchIndex()
    {

        //return view('customers.searchIndex');

    }

    public function searchResult(Request $filters)
    {

        $customers = parent::searchResult($filters);

        //If only one search result then open directly the customers TAB
        if (sizeof($customers)==1){

            return redirect()->route('customer',['id'=>$customers[0]->id]);
        }
        else {
            return view('customers.customerList')->with('customers', $customers);
        }

    }
}
