<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class HelloController extends Controller
{
    public function index()
    {
        $name = DB::table('people')->pluck('name')->all();
        // $value = $name->toArray();
        // $value = $name->all();
        $msg = implode(', ', $name);
        $result = DB::table('people')->get();
        $data = [
            'msg' => $msg,
            'data' => $result,
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }
}
