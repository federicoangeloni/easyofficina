<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    public $timestamps = false;
    protected $table = 'customers';
    public $fillable =['name','surname','address','zipcode','city','ssn','telephone'];


    public static $rules = array(
        'name'             => 'required',                        // just a normal required validation
        'surname'            => 'required',
        // 'address'            => 'required',    // required and must be unique in the ducks table
        //  'email'         => 'required|email|unique:ducks'
     );
}
