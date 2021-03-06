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
    private $quantity;
    private $description;
    private $price;

    public $timestamps = false;
    public $observer;


    protected $table = 'sparepartusages';

    public $fillable = ['sparepartid','jobid','notes','quantity'];

    public static $rules = array(
        'sparepartid' => 'nullable',
        'jobid' => 'nullable',
        'notes' => 'nullable',
        'quantity' => 'nullable'
    );


    public function toParentClass()
    {
        return $this->morphTo(null,'parentclass_type','recordrecovery_id');
    }


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