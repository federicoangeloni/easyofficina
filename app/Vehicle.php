<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public $timestamps = false;
    protected $table = 'vehicles';
    public $fillable =['model','plate','chassis','enginecode','kilometers','matriculation','ownerid'];

    public static $rules = array(
        'ownerid'             => 'required',
        'model'             => 'required',
        'plate'            => 'required',
        'chassis'            => 'required',
        'enginecode'            => 'required',
        'kilometers'            => 'required',
        'matriculation'            => 'required'
    );
}
