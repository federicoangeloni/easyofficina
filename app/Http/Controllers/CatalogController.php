<?php

namespace App\Http\Controllers;

use App\Catalog as Catalog;
use App\Repositories\CatalogRepository as CatalogRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;


class CatalogController extends Controller
{
    /**
     * @var CatalogRepository
     */

    public function __construct(CatalogRepository $catalogRepository, Catalog $catalogmodel)
    {
        $this->ActiveRepository = $catalogRepository;
        $this->ActiveModel = $catalogmodel;
    }


    public function getall()
    {
        $catalog = parent::getall();
        return view('catalog.catalogList')->with('catalog', $catalog);
    }

    public function getById($partid)
    {
        $catalog = parent::getById($partid);
        return view('catalog.catalog')->with('catalog', $catalog);
    }

    public function searchIndex()
    {

        return view('catalog.searchIndex');

    }

    public function searchResult(Request $filters)
    {

        $catalog = parent::searchResult($filters);
        if (sizeof($catalog)==1){

            return redirect()->route('catalog',['partid'=>$catalog[0]->partid]);
        }
        else {
            return view('catalog.catalogList')->with('catalog', $catalog);
        }

    }


}