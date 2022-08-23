<?php
namespace App\Facades\Laravel6AdvancedShoda;

use Illuminate\Support\Facades\Facade;

class MyService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'myservice';
    }
}
