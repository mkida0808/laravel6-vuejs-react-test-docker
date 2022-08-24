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
        $result = Person::get()->filter(function($person) {
            return $person->age < 50;
        });
        $result2 = Person::get()->filter(function($person) {
            return $person->age < 20;
        });
        $result3 = $result->diff($result2);
        $data = [
            'msg' => $msg,
            'result' => $result,
            'result2' => $result2,
            'result3' => $result3,
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }
}
