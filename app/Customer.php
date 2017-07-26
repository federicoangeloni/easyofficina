<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    public $timestamps = false;
    protected $table = 'customers';
    public $fillable = ['name', 'surname', 'nominative', 'address', 'zipcode', 'city', 'vat_number', 'ssn', 'telephone', 'fax', 'email'];


    public static $rules = array(
        'name' => 'nullable',
        'surname' => 'nullable',
        'nominative' => 'nullable',
        'address' => 'required',
        'zipcode' => 'required',
        'city' => 'required',
        'vat_number' => 'nullable',
        'ssn' => 'nullable',
        'telephone' => 'required',
        'fax' => 'nullable',
        'email' => 'nullable',
    );
}
