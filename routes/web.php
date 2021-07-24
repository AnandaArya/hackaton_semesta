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
    return view('api/statistik');
});

Route::get('/home', function () {
    return view('layout/auth');
})->name('login');


Route::post('/postlogin', 'LoginController@postLogin')->name('postlogin');
Route::get('/daftar', 'LoginController@daftar');
Route::post('/daftar/store', 'LoginController@store');
Route::get('/logout', 'LoginController@logout')->name('logout');