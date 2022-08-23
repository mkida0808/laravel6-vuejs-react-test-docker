<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class HelloController extends Controller
{
    public function index()
    {
        $result = DB::table('people')->get();
        $data = [
            'msg' => 'Database access',
            'data' => $result,
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }
}
