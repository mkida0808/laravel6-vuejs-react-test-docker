<?php

namespace App\Http\Controllers\Laravel6BasicShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        return view('laravel6basicshoda.index', ['msg' => 'フォーム入力：']);
    }

    public function post(Request $request)
    {
        $validate_rule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0, 150'
        ];
        $this->validate($request, $validate_rule);

        return view('laravel6basicshoda.index', ['msg' => '正しく入力されました']);
    }
}
