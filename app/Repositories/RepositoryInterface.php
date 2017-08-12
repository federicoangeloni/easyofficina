<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 4/28/17
 * Time: 6:26 PM
 */

namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{

    public function getall();

    public function getById($id);

    public function search(array $filters);

    public function insert(Model & $model);

    public function setmodel();

    public function update();

    public function delete();
}