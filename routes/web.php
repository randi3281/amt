<?php

use Illuminate\Support\Facades\Route;

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

// Tampil
Route::get('/', 'App\Http\Controllers\tampilController@login')->name('login');
Route::get('/home', 'App\Http\Controllers\tampilController@homeindex')->name('homeindex');
Route::get('/tugas', 'App\Http\Controllers\tampilController@tugas')->name('homeindex');
// Route::get('/home', 'App\Http\Controllers\tampilController@homeindexadmin')->name('homeindexadmin');
// End Tampil

// Proses
Route::post('/login', 'App\Http\Controllers\prosesController@login')->name('login');
// End Proses
