<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class HelloController extends Controller
{
    public function index($id)
    {
        $data = [
            'msg' => '',
            'data' => [],
        ];
        $msg = 'get: ';
        $result = [];
        $count = 0;
        DB::table('people')->chunkById(3, function ($items) use (&$msg, &$result, &$id, &$count) {
            if ($count == $id) {
                foreach ($items as $item) {
                    $msg .= $item->id . ':' . $item->name . ', ';
                    $result += array_merge($result, [$item]);
                }
                return false;
            }
            $count++;
            return true;
        });
        // $result = DB::table('people')->get();
        $data = [
            'msg' => $msg,
            'data' => $result,
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }
}
