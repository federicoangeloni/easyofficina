<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 5:44 PM
 */

namespace App\OperationUsageConcrete\ServiceUsage;


interface ServiceUsage
{

public function getprice();
public function addOperation($jobid);
}