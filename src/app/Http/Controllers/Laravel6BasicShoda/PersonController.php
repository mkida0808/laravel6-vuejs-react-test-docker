<?php

namespace App\Http\Controllers\Laravel6BasicShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Laravel6BasicShoda\Person;

class PersonController extends Controller
{
    public function index()
    {
        $items = Person::all();
        return view('laravel6basicshoda.person.index', ['items' => $items]);
    }

    public function find()
    {
        return view('laravel6basicshoda.person.find', ['input' => '']);
    }

    public function search(Request $request)
    {
        // $item = Person::find($request->input);
        $item = Person::where('name', $request->input)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('laravel6basicshoda.person.find', $param);
    }
}
