<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Laravel6AdvancedShoda\Person;



class HelloController extends Controller
{
    public function index(Request $request)
    {
        $msg = 'show people record.';
        $keys = Person::get()->modelKeys();
        $even = array_filter($keys, function($key) {
            return $key % 2 == 0;
        });
        $result = Person::get()->only($even);
        // dd($result);
        $data = [
            'msg' => $msg,
            'result' => $result,
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }
}
