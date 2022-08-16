<?php

namespace App\Http\Controllers\Laravel6BasicShoda;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use Illuminate\Http\Response;
// use App\Http\Requests\Laravel6BasicShoda\HelloRequest;
// use Validator;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index()
    {
        $items = DB::select('SELECT * FROM people');
        return view('laravel6basicshoda.index', ['items' => $items]);
    }
}
