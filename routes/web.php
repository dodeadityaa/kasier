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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

//register
Auth::routes();
//register

//login admin 
Route::post('/login/masuk', 'loginController@postlogin');
//login admin

//dashboard
Route::resource('dashboard-view', 'dashboardController');
//dashboard
//data User
Route::resource('user-view', 'datauserController');
//data User
//data Barang
Route::resource('barang-view', 'barangController');
//data Barang
//data transaksi
Route::resource('transaksi-view', 'transaksiController');
//data transaksi
//data kategori
Route::resource('kategori-view', 'kategoriController');
//data kategori
//data kasir
Route::resource('kasir-view', 'kasirController');
//data kasir