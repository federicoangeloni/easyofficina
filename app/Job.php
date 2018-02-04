<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public $timestamps = false;
    protected $table = 'jobs';
    //protected $casts = ['jobRows' => 'array']; //Serve per fare il cast da db delle righe intervento
    public $fillable = ['jobdate', 'vehicleId', 'description', 'amount', 'completed'];

    public static $rules = array(
        'jobdate' => 'required',
        'vehicleid' => 'required',
        //'jobRows' => 'nullable',
        'description' => 'nullable',
        'amount' => 'nullable',
        'completed' => 'required'
    );

    public function servicable()
    {
        return $this->morphTo();
    }

    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle', 'vehicleid', 'id');
    }

}


