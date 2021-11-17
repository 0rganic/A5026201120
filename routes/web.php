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

//tambahkan disini tugas 4
Route::get('praktikum2', function () {
    return view('htmlformvalidasi');
});

Route::get('jsjquery', function () {
    return view('jquery');
});

//jika ternyata kasusnya butuh load banyak proses
Route::get('tugasphp', "ViewController@showphp");
Route::post('hasil', "ViewController@resulthasil");

Route::get('ets', "ViewController@showETS");
