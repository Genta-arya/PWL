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
    return view('welcome');
});

Route::get('home',function(){
	return view('home') ;
});

Route::get('/desc','App\Http\Controllers\descController@deskripsi') ;
Route::get('/barang','App\Http\Controllers\barangController@barang') ;
Route::get('/cari','App\Http\Controllers\barangController@cari');
Route::get('/about','App\Http\Controllers\aboutController@tentang') ;
Route::get('/input','App\Http\Controllers\inputController@view') ;
Route::post('input/add','App\Http\Controllers\inputController@add');
Route::get('/edit','App\Http\Controllers\editController@view') ;
Route::get('/cari','App\Http\Controllers\editController@cari');
Route::get('/{id}/update','App\Http\Controllers\updateController@view');
Route::Post('/{id}/update','App\Http\Controllers\updateController@update');
Route::get('/{id}/delete','App\Http\Controllers\editController@delete');
Route::get('/pesanan','App\Http\Controllers\PesananController@pesanan') ;
Route::post('/pesanan','App\Http\Controllers\PesananController@tambahPesanan') ;




   