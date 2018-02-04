<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public $timestamps = false;
    protected $table = 'vehicles';
    public $fillable = ['ownerid', 'model', 'plate', 'chassis', 'enginecode', 'kilometers', 'matriculation'];

    public static $rules = array(
        'ownerid' => 'required',
        'model' => 'required',
        'plate' => 'required',
        'chassis' => 'required',
        'enginecode' => 'required',
        'kilometers' => 'required',
        'matriculation' => 'required'
    );

    public function customer()
    {
        return $this->belongsTo('App\Customer', 'ownerid', 'id');
    }

}

