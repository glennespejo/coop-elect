<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class SysParamFacade extends Facade {

    protected static function getFacadeAccessor() { return 'sysparam'; }

}