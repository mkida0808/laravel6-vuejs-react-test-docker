<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Laravel6AdvancedShoda\Person;

class HelloController extends Controller
{
    // public function index(Request $request)
    public function index()
    {
        function __construct()
        {
            config(['sample.message' => '新しいメッセージ']);
        }

        $data = [
            'msg' => config('sample.message'),
            'data' => config('sample.data'),
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }

    // public function other(Request $request)
    // {
    //     $data = [
    //         'msg' => $request->bye,
    //     ];
    //     return view('laravel6advancedshoda.hello.index', $data);
    // }
}
