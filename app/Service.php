<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $timestamps = false;
    protected $table = 'services';
    public $fillable = ['name', 'description', 'unit', 'unitprice'];

    public static $rules = array(
        'name' => 'required',
        'description' => 'required',
        'unit' => 'required',
        'unitprice' => 'required'
    );
}
