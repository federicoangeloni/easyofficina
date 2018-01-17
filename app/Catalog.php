<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    public $timestamps = false;
    protected $table = 'catalog';

    public $fillable = ['partid', 'name','description','unitprice'];

    public static $rules = array(
        'partid' => 'required',
        'name' => 'required',
        'description' => 'nullable',
        'unitprice' => 'required'
    );
}
