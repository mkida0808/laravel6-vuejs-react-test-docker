<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Laravel6AdvancedShoda\Person;



class HelloController extends Controller
{
    public function index()
    {
        $msg = 'show people record.';
        $re = Person::get();
        $data = [
            'msg' => $msg,
            'data' => $re,
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }

    public function save($id, $name)
    {
        $record = Person::find($id);
        $record->name = $name;
        $record->save();
        return redirect()->route('hello');
    }

    public function other()
    {
        $person = new Person();
        $person->all_data = ['aaa', 'bbb@ccc', 1234]; // ダミーデータ
        $person->save();
        return redirect()->route('hello');
    }
}
