<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MyClasses\MyService;



class HelloController extends Controller
{
    public function index(MyService $myservice, int $id = -1)
    {
        $myservice->setId($id);
        $data = [
            'msg' => $myservice->say(),
            'data' => $myservice->alldata(),
        ];

        return view('laravel6advancedshoda.hello.index', $data);
    }
}
