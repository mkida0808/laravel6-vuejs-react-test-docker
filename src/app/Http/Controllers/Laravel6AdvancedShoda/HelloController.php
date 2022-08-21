<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MyClasses\MyService;



class HelloController extends Controller
{
    public function index()
    {
        // $myservice = app('App\MyClasses\MyService');
        // $myservice = app()->make('App\MyClasses\MyService');
        $myservice = resolve('App\MyClasses\MyService');
        $data = [
            'msg' => $myservice->say(),
            'data' => $myservice->data(),
        ];

        return view('laravel6advancedshoda.hello.index', $data);
    }
}
