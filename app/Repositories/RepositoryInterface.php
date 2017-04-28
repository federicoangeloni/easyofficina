<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 4/28/17
 * Time: 6:26 PM
 */

namespace App\Repositories;


interface RepositoryInterface
{
    public function getall();

    public function getfirst();

    public function insert();

    public function update();

    public function delete();
}