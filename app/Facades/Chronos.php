<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Chronos extends Facade
{

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Cake\Chronos\Chronos::class;
    }
}
