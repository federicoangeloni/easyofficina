<?php

namespace App\Repositories;

/**
 * Created by PhpStorm.
 * User: federicoangeloni
 * Date: 4/28/17
 * Time: 5:13 PM
 */


use App\Repositories\Repository as Repository;
use App\Job as Job;
use App\Service;

class ServiceRepository extends Repository
{

    /**
     * Specify Model class name
     *
     * @return mixed
     */

    public function setmodel()
    {
        return $this->model = "App\Service";
    }


    private function createDiagService(){
        $Service= new Service();
        $Service->Code="DIAG";
        $Service->name="Diagnostics Service";
        $Service->description="Diagnostics Service Description";
        $Service->unitprice=50.99;
        $Service->unit="hour";
        $Service->save();
    }

    private function createTowService(){
        $Service= new Service();
        $Service->Code="TOW";
        $Service->name="TowTruck Service";
        $Service->description="TowTruck Service Description";
        $Service->unitprice=20.50;
        $Service->unit="km";
        $Service->save();
    }

    private function createTireService(){
        $Service= new Service();
        $Service->Code="TIRE";
        $Service->name="TireChange Service";
        $Service->description="Tire Change Service Description";
        $Service->unitprice=40.11;
        $Service->unit="pz";
        $Service->save();
    }

    public function getall(){

        $services=parent::getall();

        if ($services->count()==0){
            echo ("IN");
           $this->createDiagService();
           $this->createTowService();
           $this->createTireService();
           $services=parent::getall();
        }

        return $services;

    }

    public function getDiagnosticService(){

        $service =parent::search(array('code'=>'DIAG'))->first();
        return $service;
    }

    public function getTireChangeService(){
        $service =parent::search(array('code'=>'TIRE'))->first();
        return $service;
    }

    public function getTowTruckService(){
        $service =parent::search(array('code'=>'TOW'))->first();
        return $service;
    }


}

