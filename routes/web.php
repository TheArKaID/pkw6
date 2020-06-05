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

Route::get('/', 'PagesController@index');

Route::get('/features', 'PagesController@features');

Route::get('/pricing', 'PagesController@pricing');

Route::get('/mahasiswa', 'MahasiswaController@index');

Route::get('/jadwal', 'JadwalController@index');
Route::get('/jadwal/tambah', 'JadwalController@viewTambah');
Route::get('/jadwal/edit/{id}', 'JadwalController@viewEdit');
Route::get('/jadwal/hapus/{id}', 'JadwalController@hapus');

Route::post('/jadwal/edit', 'JadwalController@edit');
Route::post('/jadwal/tambahs', 'JadwalController@tambah');

Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::post('/students', 'StudentsController@store');
Route::get('/students/{student}', 'StudentsController@show');
Route::delete('/students/{student}', 'StudentsController@destroy');
Route::get('/students/{student}/edit', 'StudentsController@edit');
Route::patch('/students/{student}', 'StudentsController@update');