<?php

namespace App\Providers\Laravel6AdvancedShoda;

use Illuminate\Support\ServiceProvider;
use App\MyClasses\Laravel6AdvancedShoda\MyServiceInterface;
use App\MyClasses\Laravel6AdvancedShoda\PowerMyService;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->singleton('myservice', PowerMyService::class);
        app()->singleton(MyServiceInterface::class, PowerMyService::class);
        echo "MyServiceProvider/register" . PHP_EOL;
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        echo "boot" . PHP_EOL;
    }
}
