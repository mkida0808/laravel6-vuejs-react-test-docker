<?php

namespace App\Http\Controllers\Laravel6BasicShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Laravel6BasicShoda\Person;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();
        return view('laravel6basicshoda.person.index', ['items' => $items]);
    }
}
