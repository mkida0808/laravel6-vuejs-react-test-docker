<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\MyClasses\Laravel6AdvancedShoda\MyService;
use App\MyClasses\Laravel6AdvancedShoda\MyServiceInterface;
use App\Facades\Laravel6AdvancedShoda\MyService;



class HelloController extends Controller
{
    public function index(int $id = -1)
    {
        // $myservice->setId($id);
        MyService::setId($id);
        $data = [
            // 'msg' => $myservice->say(),
            // 'data' => $myservice->alldata(),
            'msg' => MyService::say(),
            'data' => MyService::alldata(),
        ];

        return view('laravel6advancedshoda.hello.index', $data);
    }
}
