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
        $msg = $request->hasCookie('msg') ? 'Cookie: ' . $request->cookie('msg') : '※Cookieはありません';
        return view('laravel6basicshoda.index', ['msg' => $msg]);

        // $validator = Validator::make($request->query(), [
        //     'id' => 'required',
        //     'pass' => 'required',
        // ]);
        // $msg = $validator->fails() ? 'クエリーに問題があります。' : 'ID/PASSを受付けました。フォームを入力して下さい。';
        // return view('laravel6basicshoda.index', ['msg' => $msg]);
    }

    public function post(Request $request)
    {
        $validate_rule = [
            'msg' => 'required',
        ];
        $this->validate($request, $validate_rule);
        $msg = $request->msg;
        $response = response()->view('laravel6basicshoda.index', ['msg' => '[' . $msg . ']をクッキーに保存しました']);
        $response->cookie('msg', $msg, 100);
        return $response;

        // $rules = [
        //     'name' => 'required',
        //     'email' => 'email',
        //     'age' => 'numeric|between:0, 150',
        // ];
        // $messages = [
        //     'name.required' => '名前は必ず入力して下さい',
        //     'email.email' => 'メールアドレスが必要です',
        //     'age.numeric' => '年齢を整数で記入して下さい',
        //     'age.between' => '年齢は0〜150の間で入力して下さい',
        // ];
        // $validator = Validator::make($request->all(), $rules, $messages);

        // $validator->sometimes('age', 'min:0', function ($input) {
        //     return !is_int($input->age);
        // });

        // $validator->sometimes('age', 'max:200', function ($input) {
        //     return !is_int($input->age);
        // });

        // if ($validator->fails()) {
        //     return redirect('/laravel6basicshoda')
        //     ->withErrors($validator)
        //     ->withInput();
        // }
        // return view('laravel6basicshoda.index', ['msg' => '正しく入力されました。']);
    }
}
