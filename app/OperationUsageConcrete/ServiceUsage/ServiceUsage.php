<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 5:44 PM
 */

namespace App\OperationUsageConcrete\ServiceUsage;


use Illuminate\Database\Eloquent\Model;

abstract class ServiceUsage extends Model
{
     public $timestamps = false;
    protected $table = 'serviceusages';

    public $fillable = ['serviceid','jobid','description','quantity'];

    public static $rules = array(
        'serviceid' => 'nullable',
        'jobid' => 'nullable',
        'description' => 'nullable',
        'quantity' => 'nullable'
    );


public function getprice(){}
public function addOperation($jobid){}
}