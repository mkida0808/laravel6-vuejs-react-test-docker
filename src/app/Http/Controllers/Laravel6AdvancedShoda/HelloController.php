<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Laravel6AdvancedShoda\Person;



class HelloController extends Controller
{
    public function index()
    {
        $msg = 'show people record.';
        $even = Person::get()->filter(function ($item) {
            return $item->id % 2 == 0;
        });
        $even2 = Person::get()->filter(function ($item) {
            return $item->age % 2 == 0;
        });
        $result = $even->merge($even2);
        $data = [
            'msg' => $msg,
            'result' => $result,
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }
}
