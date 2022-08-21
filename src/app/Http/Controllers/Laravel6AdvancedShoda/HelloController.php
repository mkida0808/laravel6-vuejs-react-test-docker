<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MyClasses\MyService;



class HelloController extends Controller
{
    public function index(int $id = -1)
    {
        // $myservice = app('App\MyClasses\MyService');
        $myservice = app()->makeWith('App\MyClasses\MyService', ['id' => $id]);
        // $myservice = resolve('App\MyClasses\MyService');
        $data = [
            'msg' => $myservice->say(),
            'data' => $myservice->alldata(),
        ];

        return view('laravel6advancedshoda.hello.index', $data);
    }
}
