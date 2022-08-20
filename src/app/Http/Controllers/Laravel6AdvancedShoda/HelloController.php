<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id)
    {
        $data = [
            // 'msg' => 'This is sample message.',
            'msg' => 'id = ' . $id,
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }

    public function other()
    {
        return redirect()->route('hello');
    }
}
