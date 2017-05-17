<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;


class Controller extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $Repository;

    public function getall(){

        return $this->Repository->getall();

    }

    public function searchResult(){
        $filters=Input::all();
        foreach ($filters as $key => $value){
            if($key=="_token" || $value=="") {
                unset($filters[$key]);
            }
        }
       return $this->Repository->search($filters);

    }

    public function add(){
        $data=Input::all();

        $modelname=$this->Repository->getmodel();
        $model = new $modelname();
        $model->create($data);

        $modelid=$this->Repository->insert($model);
        echo($modelid);
    }

}
