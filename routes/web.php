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

Route::get('/', 'mahasiswaController@index');
Route::get('/tambah', 'mahasiswaController@tambah');
Route::get('/edit/{id}', 'mahasiswaController@edit');
Route::post('/store', 'mahasiswaController@store');
Route::post('/update','mahasiswaController@update');
Route::get('/hapus/{id}','mahasiswaController@hapus');
Route::get('/cari','mahasiswaController@cari');


