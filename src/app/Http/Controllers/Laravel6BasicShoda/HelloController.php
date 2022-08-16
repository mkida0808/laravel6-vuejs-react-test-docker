<?php

namespace App\Http\Controllers\Laravel6BasicShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;
// use App\Http\Requests\Laravel6BasicShoda\HelloRequest;
// use Validator;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        if (isset($request->id))
        {
            $param = ['id' => $request->id];
            $items = DB::select('SELECT * FROM people WHERE id = :id', $param);
        } else {
            // $items = DB::select('SELECT * FROM people');
            $items = DB::table('people')->get();
        }
        return view('laravel6basicshoda.index', ['items' => $items]);
    }

    public function post(Request $request)
    {
        $items = DB::select('SELECT * FROM people');
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
        DB::insert('INSERT INTO people (name, mail, age) VALUES (:name, :mail, :age)', $param);
        return redirect('/laravel6basicshoda');
    }

    public function edit(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('SELECT * FROM people WHERE id = :id', $param);
        return view('laravel6basicshoda.edit', ['form' => $item[0]]);
    }

    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::update('UPDATE people SET name = :name, mail = :mail, age = :age WHERE id = :id', $param);
        return redirect('laravel6basicshoda');
    }

    public function del(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('SELECT * FROM people WHERE id = :id', $param);
        return view('laravel6basicshoda.del', ['form' => $item[0]]);
    }

    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('DELETE FROM people WHERE id = :id', $param);
        return redirect('/laravel6basicshoda');
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $items = DB::table('people')->where('id', '<', $id)->get();
        return view('laravel6basicshoda.show', ['items' => $items]);
    }
}
