<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class HelloController extends Controller
{
    public function index($id = -1)
    {
        if ($id >= 0) {
            $msg = 'get id: ' . $id;
            $result = [DB::table('people')->find($id)];
        } else {
            $msg = 'get people records.';
            $result = DB::table('people')->get();

        }
        $data = [
            'msg' => $msg,
            'data' => $result,
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }
}
