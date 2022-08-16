<?php

namespace App\Providers\Laravel6BasicShoda;

use Illuminate\Support\ServiceProvider;
use Validator;
use App\Http\Validators\Laravel6BasicShoda\HelloValidator;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $validator = $this->app['validator'];
        // $validator->resolver(function ($translator, $data, $rules, $messages) {
        //     return new HelloValidator($translator, $data, $rules, $messages);
        // });
        Validator::extend('hello', function($attribute, $value, $parameters, $validator) {
            return $value % 2 == 0;
        });
    }
}
