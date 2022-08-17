<?php

namespace App\Http\Controllers\Laravel6BasicShoda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Laravel6BasicShoda\Board;

class BoardController extends Controller
{
    public function index()
    {
        // $items = Board::all();

        // withメソッドによるEagerローディング
        $items = Board::with('person')->get();
        return view('laravel6basicshoda.board.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('laravel6basicshoda.board.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Board::$rules);
        $board = new Board;
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();

        return redirect('/laravel6basicshoda/board');
    }
}
