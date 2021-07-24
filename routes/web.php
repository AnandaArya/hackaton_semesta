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

Route::get('/login', function () {
    return view('layout/auth');
})->name('login');


Route::post('/postlogin', 'LoginController@postLogin')->name('postlogin');
Route::get('/daftar', 'LoginController@daftar');
Route::post('/daftar/store', 'LoginController@store');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'CekLevel:admin']], function () {
    Route::get('/home', 'LoginController@index');

     // Pendaftar Route
    Route::get('/pendaftars', 'PendaftarsController@index');
    Route::get('/pendaftars/create', 'PendaftarsController@create');
    Route::post('/pendaftars/store', 'PendaftarsController@store');
    Route::get('/pendaftars/{pendaftar}/edit', 'PendaftarsController@edit');
    Route::get('/pendaftars/{pendaftar}/detail', 'PendaftarsController@show');
    Route::put('/pendaftars/{pendaftar}', 'PendaftarsController@update');
    Route::delete('/pendaftars/{pendaftar}', 'PendaftarsController@destroy');
    Route::get('/pendaftars/search', 'PendaftarsController@search');


     //Vaksins Route
    Route::get('/vaksins', 'vaksinsController@index');
    Route::get('/vaksins/create', 'vaksinsController@create');
    Route::post('/vaksins/store', 'vaksinsController@store');
    Route::get('/vaksins/{vaksin}/edit', 'vaksinsController@edit');
    Route::get('/vaksins/{vaksin}/detail', 'vaksinsController@show');
    Route::put('/vaksins/{vaksin}', 'vaksinsController@update');
    Route::delete('/vaksins/{vaksin}', 'vaksinsController@destroy');
    Route::get('/vaksins/search', 'vaksinsController@search');
});