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

Route::get('/', function () { return view('welcome'); });
Route::get('/order', function () { return view('order'); });
Route::get('/kontak', function () { return view('kontak'); });
Route::post('/pdf', [App\Http\Controllers\CalonController::class, 'createPDF'])->name('pdf');

Route::resource('calons', 'App\Http\Controllers\CalonController');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/lunas', [App\Http\Controllers\HomeController::class, 'lunas'])->name('lunas');
Route::post('/hapus', [App\Http\Controllers\HomeController::class, 'hapus'])->name('hapus');
Route::get('/eksport', [App\Http\Controllers\HomeController::class, 'eksport'])->name('eksport');
