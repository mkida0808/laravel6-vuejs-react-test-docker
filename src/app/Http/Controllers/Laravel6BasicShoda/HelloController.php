<?php

namespace App\Http\Controllers\Laravel6BasicShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data = ['msg' => ''];
        return view('laravel6basicshoda.index', $data);
    }

    public function post(Request $request)
    {
        // フォームから送信されたname属性（ここではmsg）はRequestクラスのインスタンスから取得出来る
        $data = ['msg' => $request->msg];
        return view('laravel6basicshoda.index', $data);
    }
}
