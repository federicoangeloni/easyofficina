<?php
/**
 * Created by PhpStorm.
 * User: daniel687
 * Date: 1/7/18
 * Time: 5:52 PM
 */

namespace App\OperationUsageConcrete\SparePartUsage;

use App\Providers\AppServiceProvider;
use App\Repositories\SparePartRepository As SparePartRepository;
use Illuminate\Container\Container as App;

class WarehousePartUsage extends SparePartUsage implements \SplSubject
{

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