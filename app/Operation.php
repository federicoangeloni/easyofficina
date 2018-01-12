<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    public $timestamps = false;
    protected $table = 'operations';
    public $fillable = ['jobid', 'name', 'description', 'unit', 'unitprice', 'totalprice','quantity'];

    public static $rules = array(
        'jobid' => 'required',
        'name' => 'required',
        'description' => 'required',
        'unit' => 'required',
        'unitprice' => 'required',
        'totalprice' => 'required',
        'quantity' => 'required'

    );

}
