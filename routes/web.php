<?php

use Illuminate\Support\Facades\Route;

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
    $data = [
        'stringa' => 'Hello World!',
    ];
    return view('home', $data);
});

Route::get('/scopri', function () {
    $data2 = [
        'stringa' => 'SCOPRI',
    ];
    return view('scopri', $data2);
});

Route::get('/contatti', function () {
    $data3 = [
        'stringa' => 'CONTATTI',
    ];
    return view('contatti', $data3);
});