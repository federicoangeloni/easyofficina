<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 4/28/17
 * Time: 6:27 PM
 */

namespace App\Repositories;

use Illuminate\Container\Container as App;

abstract class Repository implements RepositoryInterface
{

    protected $model;

    private $app;


    /**
     * @param App $app

     */

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->model = $this->app->make($this->model());


    }

    public abstract function model();


    public function getall(){
        return $this->model->all();
    }

    public function getfirst(){

    }

    public function insert(){

    }

    public function update(){

    }

    public function delete(){

    }

}