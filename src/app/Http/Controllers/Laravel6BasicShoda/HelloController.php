<?php

namespace App\Http\Controllers\Laravel6BasicShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index($id='noname', $pass='unknown')
    {
        return view('laravel6basicshoda/index', compact('id', 'pass'));
    }
}
