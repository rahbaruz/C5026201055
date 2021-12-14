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
use App\Http\Controllers\ViewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tgs4', function () {
    return view('tugasempat');
});

Route::get('praktikumkedua', function () {
    return view('praktikumdua');
});

Route::get('etsc','ViewController@showets');

Route::get('tgsphp','ViewController@showtugasphp');

//route CRUD
Route::get('/pegawai','PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');

Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');

Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/pegawai/cari','PegawaiController@cari');

Route::get('/pegawai/view/{id}','PegawaiController@detail');

//Tugas Pendapatan CRUD 25 Nov 2021
Route::get('/pendapatan','PendapatanController@index');

Route::get('/pendapatan/tambah','PendapatanController@tambah');

Route::post('/pendapatan/store','PendapatanController@store');

Route::get('/pendapatan/edit/{id}','PendapatanController@edit');

Route::post('/pendapatan/update','PendapatanController@update');

Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');


//Route Absen
Route::get('/absen','AbsenController@indexabsen');

Route::get('/absen/add','AbsenController@add');

Route::post('/absen/store','AbsenController@store');

Route::get('/absen/edit/{id}','AbsenController@edit');

Route::post('/absen/update','AbsenController@update');

Route::get('/absen/hapus/{id}','AbsenController@hapus');

//Tugas Bahagia
Route::get('bahagia',function (){
    return view('layout.bahagia');
});

//Route KertasHVS
Route::get('/kertashvs','KertashvsController@index');

Route::get('/kertashvs/tambah','KertashvsController@tambah');

Route::post('/kertashvs/store','KertashvsController@store');

Route::get('/kertashvs/edit/{kodekertashvs}','KertashvsController@edit');

Route::post('/kertashvs/update','KertashvsController@update');

Route::get('/kertashvs/hapus/{kodekertashvs}','KertashvsController@hapus');

Route::get('/kertashvs/detail/{kodekertashvs}','KertashvsController@detail');

Route::get('/kertashvs/cari','KertashvsController@cari');
