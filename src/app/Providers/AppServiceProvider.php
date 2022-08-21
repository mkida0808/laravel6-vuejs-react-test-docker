<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\MyClasses\Laravel6AdvancedShoda\MyService;
use App\MyClasses\Laravel6AdvancedShoda\MyServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // app()->bind('App\MyClasses\MyService', function ($app) {
        // app()->singleton('App\MyClasses\MyService', function ($app) {
        //     $myservice = new MyService();
        //     $myservice->setId(0);
        //     return $myservice;
        // });
        // app()->when('App\MyClasses\Laravel6AdvancedShoda\MyService')
        //     ->needs('$id')
        //     ->give(1);
        app()->bind(
            'App\MyClasses\Laravel6AdvancedShoda\MyServiceInterface',
            'App\MyClasses\Laravel6AdvancedShoda\MyService',
        );
    }
}
