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
        $re = Person::get();
        $fields = Person::get()->fields();
        $data = [
            'msg' => implode(', ', $fields),
            'data' => $re,
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }
}
