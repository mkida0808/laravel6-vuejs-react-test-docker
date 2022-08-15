<?php

use App\Http\Middleware\Laravel6BasicShoda\HelloMiddleware;
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
Route::get('/laravel6basicshoda', 'Laravel6BasicShoda\HelloController@index')
    ->middleware(HelloMiddleware::class);
// Route::post('/laravel6basicshoda', 'Laravel6BasicShoda\HelloController@post');

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
