<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\MyClasses\Laravel6AdvancedShoda\MyService;
use App\MyClasses\Laravel6AdvancedShoda\MyServiceInterface;
use App\Facades\Laravel6AdvancedShoda\MyService;



class HelloController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'msg' => $request->msg,
            'data' => $request->alldata,
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }
}
