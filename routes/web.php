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

Route::resource('users','UserController')->middleware('auth');

Route::resource('jenis','JeniController')->middleware('auth');

Route::resource('ruangs','RuangController')->middleware('auth');

Route::resource('inventoris','InventoriController')->middleware('auth');
Route::resource('detail_pinjams','Detail_pinjamController');