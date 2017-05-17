<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 4/28/17
 * Time: 6:27 PM
 */

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;

abstract class Repository implements RepositoryInterface
{
    protected $repository;
    protected $model;
    protected $app;
    public function __construct(App $app)
    {
        $this->app=$app;
        $this->model= $this->app->make($this->setmodel());

    }

    public function getmodel(){
        return $this->model;
    }

    public abstract function setmodel();


    public function getall(){
        return $this->model->all();
    }


    public function search(array $filters){
        $query=array();
        foreach ($filters as $key => $value){
               $query[]=array($key,'LIKE',"%$value%");
        }
       return  $this->model->where($query)->get();

    }

    public function getfirst(){

    }

    public function insert(Model $model){
        echo($model->name);
        $model->save();
        return $model->id;
    }

    public function update(){

    }

    public function delete(){

    }

}