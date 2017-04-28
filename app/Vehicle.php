<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';
    public $fillable =['plate','chassis','enginecode','kilometers','matriculation','ownerid'];
}
