<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Laravel6AdvancedShoda\Person;
use App\Jobs\Laravel6AdvancedShoda\MyJob;



class HelloController extends Controller
{
    public function index(Person $person = null)
    {
        if ($person != null)
        {
            // MyJob::dispatch($person);
            // php artisan queue:workを実行後
            MyJob::dispatch($person)->delay(now()->addMinutes(2));
        }
        $msg = 'show people record.';
        $result = Person::get();
        $data = [
            'input' => '',
            'msg' => $msg,
            'data' => $result,
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }
}
