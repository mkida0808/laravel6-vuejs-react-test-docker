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
        $item = Person::find($request->input);
        // $item = Person::where('name', $request->input)->first();
        // $item = Person::nameEqual($request->input)->first();

        // $min = $request->input * 1;
        // $max = $min + 10;
        // $item = Person::ageGreaterThan($min)->ageLessThan($max)->first();

        $param = ['input' => $request->input, 'item' => $item];
        return view('laravel6basicshoda.person.find', $param);
    }

    public function add()
    {
        return view('laravel6basicshoda.person.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = new Person;
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        // $person->name = $request->name;
        // $person->mail = $request->mail;
        // $person->age = $request->age;

        return redirect('/laravel6basicshoda/person');
    }

    public function edit(Request $request)
    {
        $person = Person::find($request->id);
        return view('laravel6basicshoda.person.edit', ['form' => $person]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = Person::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();

        return redirect('/laravel6basicshoda/person');
    }

    public function delete(Request $request)
    {
        $person = Person::find($request->id);
        return view('laravel6basicshoda.person.del', ['form' => $person]);
    }

    public function remove(Request $request)
    {
        Person::find($request->id)->delete();
        return redirect('/laravel6basicshoda/person');
    }
}
