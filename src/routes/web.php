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
Route::prefix('laravel6basicshoda')->group(function () {
    // Hello
    Route::get('/', 'Laravel6BasicShoda\HelloController@index')->middleware('auth');
    Route::post('/', 'Laravel6BasicShoda\HelloController@post');
    Route::get('/add', 'Laravel6BasicShoda\HelloController@add');
    Route::post('/add', 'Laravel6BasicShoda\HelloController@create');
    Route::get('/edit', 'Laravel6BasicShoda\HelloController@edit');
    Route::post('/edit', 'Laravel6BasicShoda\HelloController@update');
    Route::get('/del', 'Laravel6BasicShoda\HelloController@del');
    Route::post('/del', 'Laravel6BasicShoda\HelloController@remove');
    Route::get('/show', 'Laravel6BasicShoda\HelloController@show');
    // Person
    Route::get('/person', 'Laravel6BasicShoda\PersonController@index');
    Route::get('/person/find', 'Laravel6BasicShoda\PersonController@find');
    Route::post('/person/find', 'Laravel6BasicShoda\PersonController@search');
    Route::get('/person/add', 'Laravel6BasicShoda\PersonController@add');
    Route::post('/person/add', 'Laravel6BasicShoda\PersonController@create');
    Route::get('/person/edit', 'Laravel6BasicShoda\PersonController@edit');
    Route::post('/person/edit', 'Laravel6BasicShoda\PersonController@update');
    Route::get('/person/del', 'Laravel6BasicShoda\PersonController@delete');
    Route::post('/person/del', 'Laravel6BasicShoda\PersonController@remove');
    // Board
    Route::get('/board', 'Laravel6BasicShoda\BoardController@index');
    Route::get('/board/add', 'Laravel6BasicShoda\BoardController@add');
    Route::post('/board/add', 'Laravel6BasicShoda\BoardController@create');
    // Restdata
    Route::resource('/rest', 'Laravel6BasicShoda\RestdataController');
    Route::get('/rest', 'Laravel6BasicShoda\HelloController@rest');
    // Hello（追加分）
    Route::get('/session', 'Laravel6BasicShoda\HelloController@ses_get');
    Route::post('/session', 'Laravel6BasicShoda\HelloController@ses_put');
    Route::get('/auth', 'Laravel6BasicShoda\HelloController@getAuth');
    Route::post('/auth', 'Laravel6BasicShoda\HelloController@postAuth');
});
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
