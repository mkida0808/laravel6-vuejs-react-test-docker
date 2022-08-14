<?php

namespace App\Http\Controllers\Laravel6BasicShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    //
    public function index($id = 'noname', $pass = 'unknown', Request $request, Response $response)
    {
        return view(
            'laravel6basicshoda.index',
            [
                // 'id' => $id,
                'id' => $request->id, // クエリ文字列を使って渡ってきた値
                'pass' => $pass,
                'request' => $request,
                'response' => $response,
            ]
        );
        // return view('laravel6basicshoda.index', compact('id', 'pass', 'request', 'response'));
    }
}
