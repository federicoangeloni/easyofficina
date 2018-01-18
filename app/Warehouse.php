<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    public $timestamps = false;
    protected $table = 'warehouses';

    public $fillable = ['name', 'description', 'address'];

    public static $rules = array(
        'name' => 'required',
        'address' => 'nullable',
        'description' => 'nullable'
    );



}
