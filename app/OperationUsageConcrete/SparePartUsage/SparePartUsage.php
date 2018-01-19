<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 5:44 PM
 */

namespace App\OperationUsageConcrete\SparePartUsage;

use Illuminate\Database\Eloquent\Model;

class SparePartUsage extends Model implements \SplSubject
{

    private $jobid;
    private $sparepartid;
    private $warehouseid;
    private $quantity;
    private $description;
    private $price;

    public $timestamps = false;
    public $observer;


    protected $table = 'sparepartusages';

    public $fillable = ['sparepartid','warehouseid','jobid','description','quantity'];

    public static $rules = array(
        'sparepartid' => 'nullable',
        'jobid' => 'nullable',
        'description' => 'nullable',
        'quantity' => 'nullable'
    );


    public function partusage()
    {
        return $this->morphTo();
    }

    public function getPriceAttribute()
    {
        //do whatever you want to do
        return 'sdsd';
    }

    public function gettotalprice(){}

    public function sparepart()
    {
        return $this->belongsTo('App\SparePart', 'sparepartid', 'id');
    }

    //Observer Auxiliary Classes
    public function attach(\SplObserver $observer) {
        $this->observer = $observer;
    }

    public function detach(\SplObserver $observer) {
        $this->observer = null;
    }

    public function notify() {
        $this->observer->update($this);
    }

}