<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    public $timestamps = false;
    protected $table = 'warehouses';
    protected $primaryKey = 'id';

    public $fillable = ['description','name'];
}
