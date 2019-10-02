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

use App\Http\Controllers\StudentsController;

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/mahasiswa', 'StudentsController@index');
Route::get('/mahasiswa/create', 'StudentsController@create');
Route::get('/mahasiswa/{student}', 'StudentsController@show');
Route::post('/mahasiswa', 'StudentsController@store');
Route::delete('/mahasiswa/{student}', 'StudentsController@destroy');
Route::get('/mahasiswa/{student}/edit', 'StudentsController@edit');
Route::patch('/mahasiswa/{student}', 'StudentsController@update');
