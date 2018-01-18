<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SparePart extends Model
{

    public $timestamps = false;
    public $table = 'spareparts';
    protected $primaryKey = 'id';

    public $fillable = ['quantity','warehouseid','catalogid'];

    public function catalog()
    {
        return $this->belongsTo('App\Catalog', 'catalogid', 'partid');
    }

    public function warehouse()
    {
        return $this->belongsTo('App\Warehouse', 'warehouseid', 'id');
    }





}
