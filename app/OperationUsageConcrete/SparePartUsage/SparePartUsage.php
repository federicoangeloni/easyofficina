<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 5:44 PM
 */

namespace App\OperationUsageConcrete\SparePartUsage;

use Illuminate\Database\Eloquent\Model;

class SparePartUsage extends Model
{

    private $jobid;
    private $sparepartid;
    private $warehouseid;
    private $quantity;
    private $description;
    public $timestamps = false;


    protected $table = 'sparepartusages';

    public $fillable = ['sparepartid','warehouseid','jobid','description','quantity'];

    public static $rules = array(
        'sparepartid' => 'nullable',
        'jobid' => 'nullable',
        'description' => 'nullable',
        'quantity' => 'nullable'
    );



    public function getunitprice(){}

    public function gettotalprice(){}


    public function spareparts()
    {
        return $this->belongsTo('App\SparePart', 'sparepartid', 'id');
    }

}