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
        return view('laravel6basicshoda.index', ['msg' => 'フォーム入力：']);
    }

    public function post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'email',
            'age' => 'numeric|between:0, 150'
        ]);

        if ($validator->fails()) {
            return redirect('/laravel6basicshoda')
                ->withErrors($validator)
                ->withInput();
        }

        return view('laravel6basicshoda.index', ['msg' => '正しく入力されました']);
    }
}
