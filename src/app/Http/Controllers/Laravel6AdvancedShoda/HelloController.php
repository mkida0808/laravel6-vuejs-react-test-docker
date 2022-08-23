<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class HelloController extends Controller
{
    public function index()
    {
        $data = [
            'msg' => '',
            'data' => [],
        ];
        $msg = 'get: ';
        $result = [];
        DB::table('people')->chunkById(2, function ($items) use (&$msg, &$result) {
            foreach ($items as $item) {
                $msg .= $item->id . ', ';
                $result += array_merge($result, [$item]);
                break;
            }
            return true;
        });
        $result = DB::table('people')->get();
        $data = [
            'msg' => $msg,
            'data' => $result,
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }
}
