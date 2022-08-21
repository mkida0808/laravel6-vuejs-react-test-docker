<?php

namespace App\Http\Controllers\Laravel6AdvancedShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Laravel6AdvancedShoda\Person;
use Illuminate\Support\Facades\Storage;

class HelloController extends Controller
{
    private $fname;

    public function __construct()
    {
        $this->fname = 'hello.txt';
    }

    public function index(Request $request, Response $response)
    {
        $name = $request->query('name');
        $mail = $request->query('mail');
        $tel = $request->query('tel');
        $msg = $request->query('msg');
        $msg = $name . ', ' . $mail . ', ' . $tel;
        $keys = ['名前', 'メール', '電話'];
        $values = [$name, $mail, $tel];
        // $keys = [];
        // $values = [];
        // if ($request->isMethod('post')) {
        //     $form = $request->only(['name', 'mail', 'tel']);
        //     $keys = array_keys($form);
        //     $values = array_values($form);
        //     $msg = old('name') . ', ' . old('mail') . ', ' . old('tel');
        //     $data = [
        //         'msg' => $msg,
        //         'keys' => $keys,
        //         'values' => $values,
        //     ];
        //     $request->flash();
        //     return view('laravel6advancedshoda.hello.index', $data);
        // }
        $data = [
            'msg' => $msg,
            'keys' => $keys,
            'values' => $values,
        ];
        $request->flash();
        return view('laravel6advancedshoda.hello.index', $data);
    }

    public function other()
    {
        $data = [
            'name' => 'makoto',
            'mail' => 'makoto@k.com',
            'tel' => '090-0000-0000',
        ];
        $query_str = http_build_query($data);
        // dd($query_str);
        $data['msg'] = $query_str;
        // if (Storage::disk('public')->exists('bk_' . $this->fname)) {
        //     Storage::disk('public')->delete('bk_' . $this->fname);
        // }
        // Storage::disk('public')->copy($this->fname, 'bk_' . $this->fname);
        // if (Storage::disk('local')->exists('bk_' . $this->fname)) {
        //     Storage::disk('local')->delete('bk_' . $this->fname);
        // }
        // Storage::disk('local')->move('public/bk_' . $this->fname, 'bk_' . $this->fname);
        return redirect()->route('hello', $data);
    }

    public function download()
    {
        return Storage::disk('public')->download($this->fname);
    }

    public function upload(Request $request)
    {
        $ext = '.' . $request->file('file')->extension();
        // Storage::disk('local')->putFile('files', $request->file('file'));
        Storage::disk('public')->putFileAs('files', $request->file('file'), 'uploaded' . $ext);
        return redirect()->route('hello');
    }
}
