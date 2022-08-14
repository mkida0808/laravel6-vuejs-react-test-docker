<?php

namespace App\Http\Controllers\Laravel6BasicShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    //
    public function index($id='noname', $pass='unknown', Request $request, Response $response)
    {
        return view('laravel6basicshoda/index', compact('id', 'pass', 'request', 'response'));
    }
}
