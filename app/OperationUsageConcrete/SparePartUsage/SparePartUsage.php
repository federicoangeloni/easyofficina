<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 5:44 PM
 */

namespace App\OperationUsageConcrete\SparePartUsage;

interface SparePartUsage
{
public function getunitprice();
public function getprice();
public function getunit();
public function addOperation();

}