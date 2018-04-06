<?php

namespace App\Services;

use App\Traits\Sharable;

class CommonService
{
    const COMMON_SERVICE = 10;

    public static function testFacades()
    {
        echo "getted Facades";
    }
}
