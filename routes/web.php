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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/news',[\App\Http\Controllers\NewsController::class, 'index'])->name('news.index');
Route::get('/news/create',[\App\Http\Controllers\NewsController::class, 'create'])->name('news.create');
Route::post('/news/save',[\App\Http\Controllers\NewsController::class, 'save'])->name('news.save');
