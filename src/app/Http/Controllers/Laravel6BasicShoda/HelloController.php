<?php

namespace App\Http\Controllers\Laravel6BasicShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;
use App\Http\Requests\Laravel6BasicShoda\HelloRequest;
use Validator;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->query(), [
            'id' => 'required',
            'pass' => 'required',
        ]);

        $msg = $validator->fails() ? 'クエリーに問題があります。' : 'ID/PASSを受付けました。フォームを入力して下さい。';
        return view('laravel6basicshoda.index', ['msg' => $msg]);
    }

    // public function post(Request $request)
    // {
    //     return view('laravel6basicshoda.index', ['msg' => $msg]);
    // }
}
