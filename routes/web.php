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
