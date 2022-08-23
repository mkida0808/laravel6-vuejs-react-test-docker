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
        $data = [
            'msg' => 'show people record.',
            'data' => Person::orderBy('age', 'asc')->get()->reject(function ($person) {
                return $person->age < 50;
            }),
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }
}
