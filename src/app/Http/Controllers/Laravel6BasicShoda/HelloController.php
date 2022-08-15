<?php

namespace App\Http\Controllers\Laravel6BasicShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        return view('laravel6basicshoda.index', ['dataFromMiddleware' => $request->dataFromMiddleware]);
    }
}
