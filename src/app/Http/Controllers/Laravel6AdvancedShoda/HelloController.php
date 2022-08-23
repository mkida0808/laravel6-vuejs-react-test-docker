<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class HelloController extends Controller
{
    public function index(int $id = -1)
    {
        if ($id >= 0) {
            $msg = 'get ID <= ' . $id;
            $result = DB::table('people')
                ->select('id', 'name', 'mail', 'age')
                ->where('id', '<=', $id)
                ->get();
        } else {
            $msg = 'get record people';
            $result = DB::table('people')
                ->select('id', 'name', 'mail', 'age')
                ->get();
        }
        $data = [
            'msg' => $msg,
            'data' => $result,
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }
}
