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

    public function post(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'email',
            'age' => 'numeric|between:0, 150',
        ];
        $messages = [
            'name.required' => '名前は必ず入力して下さい',
            'email.email' => 'メールアドレスが必要です',
            'age.numeric' => '年齢を整数で記入して下さい',
            'age.between' => '年齢は0〜150の間で入力して下さい',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect('/laravel6basicshoda')
            ->withErrors($validator)
            ->withInput();
        }
        return view('laravel6basicshoda.index', ['msg' => '正しく入力されました。']);
    }
}
