<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// buku
Route::get('/buku','App\Http\Controllers\dashboardController@index');
Route::post('/buku/add','App\Http\Controllers\dashboardController@tambah');
Route::post('/buku/{id}',['as'=>'buku.update','uses'=>'App\Http\Controllers\dashboardController@buku_edit']);
Route::delete('/buku/{id}',['as'=>'buku.delete','uses'=>'App\Http\Controllers\dashboardController@buku_delete']);


    // anggota
Route::get('/anggota','App\Http\Controllers\dashboardController@anggota');
Route::post('/anggota/add','App\Http\Controllers\dashboardController@anggota_add');
Route::post('/anggota/{id}',['as'=>'anggota.update','uses'=>'App\Http\Controllers\dashboardController@anggota_edit']);
Route::delete('/anggota/{id}',['as'=>'anggota.delete','uses'=>'App\Http\Controllers\dashboardController@anggota_delete']);

// transaksi
Route::get('/transaksi','App\Http\Controllers\dashboardController@transaksi');
Route::post('/transaksi/add','App\Http\Controllers\dashboardController@transaksi_add');
Route::delete('/transaksi/{id}',['as'=>'transaksi.delete', 'uses'=>'App\Http\Controllers\dashboardController@transaksi_delete']);


// // login
// Route::get('/login', 'App\Http\Controllers\dashboardController@index_login');


Route::get('/register', 'App\Http\Controllers\dashboardController@index_regis');
Route::post('/register/post', 'App\Http\Controllers\dashboardController@store_regis');





Route::get('/', function () {
    return view('welcome');
});

// Route::get('/anggota/edit','App\Http\Controllers\dashboardController@anggota_edit');
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
