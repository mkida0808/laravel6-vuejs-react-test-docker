<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Laravel6AdvancedShoda\Person;
use App\Jobs\Laravel6AdvancedShoda\MyJob;
use App\Events\Laravel6AdvancedShoda\PersonEvent;



class HelloController extends Controller
{
    public function index()
    {
        // if ($person != null)
        // {
        //     $qname = $person->id % 2 == 0 ? 'even' : 'odd';
        //     // MyJob::dispatch($person)->delay(now()->addMinutes(2));
        //     MyJob::dispatch($person)->onQueue($qname);
        // }
        $msg = 'show people record.';
        $result = Person::get();
        $data = [
            'input' => '',
            'msg' => $msg,
            'data' => $result,
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }

    public function send(Request $request)
    {
        $id = $request->input('id');
        $person = Person::find($id);

        event(new PersonEvent($person));

        $data = [
            'input' => '',
            'msg' => 'id=' . $id,
            'data' =>[$person],
        ];
        return view('laravel6advancedshoda.hello.index', $data);
        // dispatch(function () use ($person)
        // {
        //     Storage::append('person_access_log.txt', $person->all_data);
        // });
        // return redirect()->route('hello');
    }
}
