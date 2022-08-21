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
        $msg = 'please input text:';
        $keys = [];
        $values = [];
        if ($request->isMethod('post')) {
            $form = $request->only(['name', 'mail']);
            $keys = array_keys($form);
            $values = array_values($form);
            $data = [
                'msg' => 'you inputed.',
                'keys' => $keys,
                'values' => $values,
            ];
            return view('laravel6advancedshoda.hello.index', $data);
        }
        $data = [
            'msg' => $msg,
            'keys' => $keys,
            'values' => $values,
        ];
        return view('laravel6advancedshoda.hello.index', $data);
    }

    public function other($msg)
    {
        if (Storage::disk('public')->exists('bk_' . $this->fname)) {
            Storage::disk('public')->delete('bk_' . $this->fname);
        }
        Storage::disk('public')->copy($this->fname, 'bk_' . $this->fname);
        if (Storage::disk('local')->exists('bk_' . $this->fname)) {
            Storage::disk('local')->delete('bk_' . $this->fname);
        }
        Storage::disk('local')->move('public/bk_' . $this->fname, 'bk_' . $this->fname);
        return redirect()->route('hello');
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
