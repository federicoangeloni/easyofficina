<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{


    public $timestamps = false;
    protected $table = 'customers';
    public $fillable =['name','surname','address','zipcode','city','ssn','telephone'];


    public function create(array $attributes=[]){
        $this->name=$attributes["name"];
        $this->surname=$attributes["surname"];

    }

}
