<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MyClasses\Laravel6AdvancedShoda\MyService;
use App\MyClasses\Laravel6AdvancedShoda\MyServiceInterface;



class HelloController extends Controller
{
    function __construct()
    {
    }
    public function index(MyServiceInterface $myservice, int $id = -1)
    {
        $myservice->setId($id);
        $data = [
            'msg' => $myservice->say(),
            'data' => $myservice->alldata(),
        ];

        return view('laravel6advancedshoda.hello.index', $data);
    }
}
