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


//route PegawaiCRUD
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');
Route::get('/pegawai/cari', 'PegawaiController@cari');
Route::get('/pegawai/view/{id}', 'PegawaiController@detail');


//route CRUD tugas
Route::get('/tugas', 'tugasPegawaiController@index');
Route::get('/tugas/tambah', 'tugasPegawaiController@tambah');
Route::post('/tugas/store', 'tugasPegawaiController@store');
Route::get('/tugas/edit/{id}', 'tugasPegawaiController@edit');
Route::post('/tugas/update', 'tugasPegawaiController@update');
Route::get('/tugas/hapus/{id}', 'tugasPegawaiController@hapus');
Route::get('/tugas/cari', 'tugasPegawaiController@cari');
Route::get('/tugas/view/{id}', 'tugasPegawaiController@detail');

//route CRUD absen
Route::get('/absen', 'AbsenController@indexabsen');
Route::get('/absen/add', 'AbsenController@add');
Route::post('/absen/store', 'AbsenController@store');
Route::get('/absen/edit/{id}', 'AbsenController@edit');
Route::post('/absen/update', 'AbsenController@update');
Route::get('/absen/hapus/{id}', 'AbsenController@hapus');
Route::get('/absen/cari', 'AbsenController@cari');
Route::get('/absen/view/{id}', 'AbsenController@detail');

//route CRUD buku
Route::get('/buku', 'BukuController@index');
Route::get('/buku/tambah', 'BukuController@tambah');
Route::post('/buku/store', 'BukuController@store');
Route::get('/buku/edit/{id}', 'BukuController@edit');
Route::post('/buku/update', 'BukuController@update');
Route::get('/buku/hapus/{id}', 'BukuController@hapus');
Route::get('/buku/cari', 'BukuController@cari');
Route::get('/buku/view/{id}', 'BukuController@detail');

//route CRUD Karyawan1
Route::get('/karyawan1', 'Karyawan1Controller@index');
Route::get('/karyawan1/edit/{id}', 'Karyawan1Controller@edit');
Route::post('/karyawan1/update', 'Karyawan1Controller@update');
Route::get('/karyawan1/view/{id}', 'Karyawan1Controller@detail');
