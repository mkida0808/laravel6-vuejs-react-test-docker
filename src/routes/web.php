<?php

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

Route::get('/', function () {
    return view('welcome');
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

// CSS基本編
Route::get('/dotinstall/css_basic', function () {
    return view('dotinstall.css_basic.index');
});
