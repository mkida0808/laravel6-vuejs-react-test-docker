<?php

// use App\Http\Middleware\Laravel6BasicShoda\HelloMiddleware;
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
Route::get('/laravel6basicshoda', 'Laravel6BasicShoda\HelloController@index');
Route::post('/laravel6basicshoda', 'Laravel6BasicShoda\HelloController@post');
Route::get('/laravel6basicshoda/add', 'Laravel6BasicShoda\HelloController@add');
Route::post('/laravel6basicshoda/add', 'Laravel6BasicShoda\HelloController@create');
Route::get('/laravel6basicshoda/edit', 'Laravel6BasicShoda\HelloController@edit');
Route::post('/laravel6basicshoda/edit', 'Laravel6BasicShoda\HelloController@update');
Route::get('/laravel6basicshoda/del', 'Laravel6BasicShoda\HelloController@del');
Route::post('/laravel6basicshoda/del', 'Laravel6BasicShoda\HelloController@remove');
Route::get('/laravel6basicshoda/show', 'Laravel6BasicShoda\HelloController@show');


Route::get('/laravel6basicshoda/person', 'Laravel6BasicShoda\PersonController@index');
Route::get('/laravel6basicshoda/person/find', 'Laravel6BasicShoda\PersonController@find');
Route::post('/laravel6basicshoda/person/find', 'Laravel6BasicShoda\PersonController@search');
Route::get('/laravel6basicshoda/person/add', 'Laravel6BasicShoda\PersonController@add');
Route::post('/laravel6basicshoda/person/add', 'Laravel6BasicShoda\PersonController@create');
Route::get('/laravel6basicshoda/person/edit', 'Laravel6BasicShoda\PersonController@edit');
Route::post('/laravel6basicshoda/person/edit', 'Laravel6BasicShoda\PersonController@update');
Route::get('/laravel6basicshoda/person/del', 'Laravel6BasicShoda\PersonController@delete');
Route::post('/laravel6basicshoda/person/del', 'Laravel6BasicShoda\PersonController@remove');

Route::get('/laravel6basicshoda/board', 'Laravel6BasicShoda\BoardController@index');
Route::get('/laravel6basicshoda/board/add', 'Laravel6BasicShoda\BoardController@add');
Route::post('/laravel6basicshoda/board/add', 'Laravel6BasicShoda\BoardController@create');

Route::resource('/laravel6basicshoda/rest', 'Laravel6BasicShoda\RestdataController');
Route::get('/laravel6basicshoda/rest', 'Laravel6BasicShoda\HelloController@rest');

Route::get('/laravel6basicshoda/session', 'Laravel6BasicShoda\HelloController@ses_get');
Route::post('/laravel6basicshoda/session', 'Laravel6BasicShoda\HelloController@ses_put');

// ********************* PHPフレームワークLaravel入門第2版（ルーティング終了） *********************



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
