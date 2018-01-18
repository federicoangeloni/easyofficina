<?php
/**
 * Created by PhpStorm.
 * User: Federico
 * Date: 17/01/2018
 * Time: 23:38
 */

namespace App\Http\Observers;
use Illuminate\Container\Container as App;
use App\Repositories\SparePartRepository as SparePartRepository;


class SparePartsObservers implements \SplObserver
{
    protected $warehouseid;
    protected $sparepartid;
    protected $quantity;

    public function __construct($warehouseid, $sparepartid, $quantity) {
        $this->warehouseid = $warehouseid;
        $this->sparepartid = $sparepartid;
        $this->quantity = $quantity;
        return $this;
    }


    public function update(\SplSubject $subject)
    {
        $sparepartsrepo = new SparePartRepository(App::getInstance());
        $sparepartsrepo->updateQuantity($this->sparepartid,$this->warehouseid,$this->quantity);
    }
}