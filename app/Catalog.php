<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    public $timestamps = false;
    protected $table = 'catalog';
    protected $primaryKey = 'partid';

    public $fillable = ['unitprice','name','description'];
}
