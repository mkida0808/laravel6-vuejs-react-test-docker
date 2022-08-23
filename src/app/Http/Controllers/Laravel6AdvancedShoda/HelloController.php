<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class HelloController extends Controller
{
    public function index()
    {
        $msg = 'get people records.';
        $first = DB::table('people')->first();
        $last = DB::table('people')->orderBy('id', 'desc')->first();
        $result = [$first, $last];
        $data = [
            'msg' => $msg,
            'data' => $result,
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }
}
