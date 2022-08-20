<?php

use App\Http\Middleware\Laravel6AdvancedShoda\HelloMiddleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// ********************* PHPフレームワークLaravel入門第2版（ルーティング開始） *********************
// ルートパラメータとして値を取得する場合
// Route::get('/laravel6basicshoda/{id?}/{pass?}', 'Laravel6BasicShoda\HelloController@index');
// クエリ文字列として値を取得する場合
Route::prefix('laravel6basicshoda')->namespace('Laravel6BasicShoda')->group(function () {
    // Hello
    Route::get('/', 'HelloController@index')->middleware('auth');
    Route::post('/', 'HelloController@post');
    Route::get('/add', 'HelloController@add');
    Route::post('/add', 'HelloController@create');
    Route::get('/edit', 'HelloController@edit');
    Route::post('/edit', 'HelloController@update');
    Route::get('/del', 'HelloController@del');
    Route::post('/del', 'HelloController@remove');
    Route::get('/show', 'HelloController@show');
    // Person
    Route::get('/person', 'PersonController@index');
    Route::get('/person/find', 'PersonController@find');
    Route::post('/person/find', 'PersonController@search');
    Route::get('/person/add', 'PersonController@add');
    Route::post('/person/add', 'PersonController@create');
    Route::get('/person/edit', 'PersonController@edit');
    Route::post('/person/edit', 'PersonController@update');
    Route::get('/person/del', 'PersonController@delete');
    Route::post('/person/del', 'PersonController@remove');
    // Board
    Route::get('/board', 'BoardController@index');
    Route::get('/board/add', 'BoardController@add');
    Route::post('/board/add', 'BoardController@create');
    // Restdata
    Route::resource('/rest', 'RestdataController');
    Route::get('/rest', 'HelloController@rest');
    // Hello（追加分）
    Route::get('/session', 'HelloController@ses_get');
    Route::post('/session', 'HelloController@ses_put');
    Route::get('/auth', 'HelloController@getAuth');
    Route::post('/auth', 'HelloController@postAuth');
});
// ********************* PHPフレームワークLaravel入門第2版（ルーティング終了） *********************


// ********************* PHPフレームワークLaravel実践開発（ルーティング開始） *********************
Route::prefix('laravel6advancedshoda')->namespace('Laravel6AdvancedShoda')->group(function () {
    // Route::middleware([HelloMiddleware::class])->group(function () {
        // Route::get('/hello/{id}', "HelloController@index")->where('id', '[0-9]+')->name('hello');
        Route::get('/hello', "HelloController@index")->name('hello');
        Route::post('/hello', "HelloController@index");
        Route::get('/hello/{msg}', "HelloController@other");
        Route::get('/hello/download', "HelloController@download");
        Route::post('/hello/upload', "HelloController@upload");
    // });
});
// ********************* PHPフレームワークLaravel実践開発（ルーティング終了） *********************



Route::get('/', function () {
    return view('welcome');
});



// ********************* ドットインストール（ルーティング開始） *********************
// CSS基本編
Route::get('/dotinstall/css_basic', function () {
    return view('dotinstall.css_basic.index');
});

// CSSセレクター編
Route::get('/dotinstall/css_selector', function () {
    return view('dotinstall.css_selector.index');
});

// CSSアニメーション編
Route::get('/dotinstall/css_animation', function () {
    return view('dotinstall.css_animation.index');
});

// JS基本編
Route::get('/dotinstall/js_basic', function () {
    return view('dotinstall.js_basic.index');
});

// JSオブジェクト編
Route::get('/dotinstall/js_object', function () {
    return view('dotinstall.js_object.index');
});

// JSDOM編
Route::get('/dotinstall/js_dom', function () {
    return view('dotinstall.js_dom.index');
});

// JS Intersection Observer API 編
Route::get('/dotinstall/js_intersection_observer_api', function () {
    return view('dotinstall.js_intersection_observer_api.index');
});

// JSモーダルウインドウ編
Route::get('/dotinstall/js_modalwindow', function () {
    return view('dotinstall.js_modalwindow.index');
});

// JSハンバーガーメニュー編
Route::get('/dotinstall/js_hamburgermenu', function () {
    return view('dotinstall.js_hamburgermenu.index');
});

// JSアコーディオン編
Route::get('/dotinstall/js_accordion', function () {
    return view('dotinstall.js_accordion.index');
});

// JSタブメニュー編
Route::get('/dotinstall/js_tabmenu', function () {
    return view('dotinstall.js_tabmenu.index');
});

// JSカルーセル編
Route::get('/dotinstall/js_carousel', function () {
    return view('dotinstall.js_carousel.index');
});
// ********************* ドットインストール（ルーティング終了） *********************

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
