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
        app()->singleton(MyServiceInterface::class, PowerMyService::class);
        echo "register" . PHP_EOL;
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
