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
        $this->app = $app;
        $this->model = $this->app->make($this->setmodel());
    }

    public function getall()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function search(array $filters)
    {
        $query = array();
        foreach ($filters as $key => $value) {
            $query[] = array($key, 'LIKE', "%$value%");
        }
        return $this->model->where($query)->get();
    }

    public function insert(Model & $model)
    {
        $model->save();
    }

    public function update()
    {

    }

    public function delete($id)
    {
        $model=$this->model->find($id);
        $model->delete();
    }

    public abstract function setmodel();


}