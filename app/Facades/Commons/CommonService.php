<?php

namespace App\Facades\Commons;

use Illuminate\Support\Facades\Facade;

class CommonService extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'CommonService';
    }
}