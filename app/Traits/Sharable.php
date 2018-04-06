<?php

namespace App\Traits;

trait Sharable {

    public function share($item)
    {
        return "share this item".$item;
    }

}
