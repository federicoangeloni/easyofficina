<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public $timestamps = false;
    protected $table = 'jobs';
    public $fillable =['jobdate','amount','vehicleid'];

    public static $rules = array(
        'jobdate'             => 'required',
        'vehicleid'            => 'required'
    );
}
