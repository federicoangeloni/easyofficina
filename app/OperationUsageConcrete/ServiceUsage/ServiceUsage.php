<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 5:44 PM
 */

namespace App\OperationUsageConcrete\ServiceUsage;


use Illuminate\Database\Eloquent\Model;

class ServiceUsage extends Model implements \SplSubject
{

    public $timestamps = false;
    public $observer;

    protected $table = 'serviceusages';

    public $fillable = ['recoveryservice_id','serviceid','jobid','description','quantity'];

    public static $rules = array(
        'recoveryservice_id'=>'nullable',
        'jobid' => 'nullable',
        'description' => 'nullable',
        'quantity' => 'nullable'
    );

    public function service_details()
    {
        return $this->belongsTo('App\Service', 'serviceid', 'id');
    }

    public function toParentService()
    {
        return $this->morphTo(null,'parentclass_type','recordrecovery_id');
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