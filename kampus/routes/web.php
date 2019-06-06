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
})->name('welcome');

// Dosen
Route::get('/dosen','DosenController@index');
Route::get('/dosen/tambah','DosenController@tambah');
Route::post('/dosen/store','DosenController@store');
Route::get('/dosen/edit/{id}','DosenController@edit');
Route::post('/dosen/update','DosenController@update');
Route::get('/dosen/hapus/{id}','DosenController@hapus');

// mahasiswa
Route::get('/mahasiswa','MahasiswaController@index');

// login
Route::get('login','LoginController@index')->name('get.login');
Route::post('login','LoginController@login')->name('post.login');
Route::get('logout','LoginController@logout')->name('logout');
Route::group(['prefix' => 'dosen', 'middleware' => 'auth:user'], function() {
Route::get('/','DosenController@index')->name('dosen.user');
});