<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class HelloController extends Controller
{
    public function index($id)
    {
        $ids = explode(',', $id);  // $idsは配列になる
        $msg = 'get people.';
        // $result = DB::table('people')->whereBetween('id', $ids)->get();
        $result = DB::table('people')->whereIn('id', $ids)->get();
        $data = [
            'msg' => $msg,
            'data' => $result,
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }
}
