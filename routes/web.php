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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//route CRUD
Route::get('/mobil', 'MobilController@index');
Route::get('/mobil/tambah', 'MobilController@tambah');
Route::post('/mobil/store', 'MobilController@store');
Route::get('/mobil/edit/{id}', 'MobilController@edit');
Route::post('/mobil/update', 'MobilController@update');
Route::get('/mobil/hapus/{id}', 'MobilController@hapus');
