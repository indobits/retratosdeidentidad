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
    return view('home');
});

Route::get('proyecto', function () {
    return view('content.proyecto');
});

Route::get('somos', function () {
    return view('content.somos');
});

Route::get('galeria', function () {
    return view('content.galeria');
});

Route::get('retratos', function () {
    return view('content.retratos');
});

Route::get('rostros', function () {
    return view('content.rostros');
});

Route::get('audiovisuales', function () {
    return view('content.audiovisuales');
});

Route::get('documentales', function () {
    return view('content.documentales');
});

Route::get('spots', function () {
    return view('content.spots');
});

Route::get('recursos', function () {
    return view('content.recursos');
});

Route::get('postales', function () {
    return view('content.postales');
});

Route::get('colaborar', function () {
    return view('content.colaborar');
});