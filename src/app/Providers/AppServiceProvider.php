<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\MyClasses\Laravel6AdvancedShoda\MyService;
use App\MyClasses\Laravel6AdvancedShoda\PowerMyService;
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
        // app()->bind(
        //     'App\MyClasses\Laravel6AdvancedShoda\MyServiceInterface',
        //     'App\MyClasses\Laravel6AdvancedShoda\PowerMyService',
        // );
        // app()->resolving(function ($obj, $app) {
        //     if (is_object($obj)) {
        //         echo get_class($obj) . PHP_EOL;
        //     } else {
        //         echo $obj . PHP_EOL;
        //     }
        // });
        // app()->resolving(PowerMyService::class, function ($obj, $app) {
        //     $newdata = ['ハンバーグ', 'カレーライス', '唐揚げ', '餃子'];
        //     $obj->setData($newdata);
        //     $obj->setId(rand(0, count($newdata)));
        // });
        // // app()->singleton(
        // //     'App\MyClasses\Laravel6AdvancedShoda\MyServiceInterface',
        // //     'App\MyClasses\Laravel6AdvancedShoda\PowerMyService'
        // // );
        // app()->singleton(MyServiceInterface::class, PowerMyService::class);
    }
}
