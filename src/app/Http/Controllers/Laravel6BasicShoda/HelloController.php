<?php

namespace App\Http\Controllers\Laravel6BasicShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;
// use App\Http\Requests\Laravel6BasicShoda\HelloRequest;
// use Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Laravel6BasicShoda\Person;
use Illuminate\Support\Facades\Auth;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $sort = $request->sort;
        $items = DB::table('people')->orderBy('id', 'asc')->paginate(5);
        $param = ['items' => $items, 'sort' => $sort, 'user' => $user];
        return view('laravel6basicshoda.index', $param);
    }

    public function post(Request $request)
    {
        $items = DB::table('people')->get();
        return view('laravel6basicshoda.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('laravel6basicshoda.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('people')->insert($param);
        return redirect('/laravel6basicshoda');
    }

    public function edit(Request $request)
    {
        $item = DB::table('people')->where('id', $request->id)->first();
        return view('laravel6basicshoda.edit', ['form' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('people')->where('id', $request->id)->update($param);
        return redirect('laravel6basicshoda');
    }

    public function del(Request $request)
    {
        $item = DB::table('people')->where('id', $request->id)->first();
        return view('laravel6basicshoda.del', ['form' => $item]);
    }

    public function remove(Request $request)
    {
        DB::table('people')->where('id', $request->id)->delete();
        return redirect('/laravel6basicshoda');
    }

    public function show(Request $request)
    {
        $items = DB::table('people')->offset($request->page * 3)->limit(3)->get();
        return view('laravel6basicshoda.show', ['items' => $items]);
    }

    public function rest(Request $request)
    {
        return view('laravel6basicshoda.rest');
    }

    public function ses_get(Request $request)
    {
        $sesdata = $request->session()->get('msg');
        return view('laravel6basicshoda.session', ['session_data' => $sesdata]);
    }

    public function ses_put(Request $request)
    {
        $msg = $request->input;
        $request->session()->put('msg', $msg);
        return redirect('/laravel6basicshoda/session');
    }

    public function getAuth(Request $request)
    {
        return view('laravel6basicshoda.auth', ['message' => 'ログインして下さい']);
    }

    public function postAuth(Request $request)
    {
        $auth = ['email' => $request->email, 'password' => $request->password];
        if (Auth::attempt($auth)) {
            $message = 'ログインしました。（' . Auth::user()->name . '）';
        } else {
            $message = 'ログインに失敗しました。';
        }
        return view('laravel6basicshoda.auth', ['message' => $message]);
    }
}
