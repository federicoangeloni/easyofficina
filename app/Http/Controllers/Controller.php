<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


use \ReflectionProperty as ReflectionProperty;
use \ReflectionClass as ReflectionClass;


class Controller extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $ActiveRepository;
    protected $ActiveModel;

    public function getall(){
        return $this->ActiveRepository->getall();
    }

    public function getById($id){
        return $this->ActiveRepository->getById($id);
    }

    public function searchResult(Request $request){

        //Save The POST Request to filter variable
        $filters=$request->request->all();

        //Remove Empty Fields And Auth Token From Filters Array
        foreach ($filters as $key => $value){
            if($key=="_token" || $value=="") {
                unset($filters[$key]);
            }
        }
        //Return the Result of the Search to the Controller
       return $this->ActiveRepository->search($filters);
    }


    public function add(Request $request){

        //Validate the Form with Validation Rules of the Active Model
        $rules=new ReflectionProperty($this->ActiveModel,"rules");
        $this->validate($request,$rules->getValue());

        //Create a new instance of the Active model
        $model = new $this->ActiveModel($request->request->all());
        //Save Model to Repository
        $this->ActiveRepository->insert($model);
        //Return The Model to the Active Controller
        return $model;

    }

}
