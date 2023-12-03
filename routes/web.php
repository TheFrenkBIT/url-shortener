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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/url', \App\Http\Controllers\Url\IndexController::class);
Route::post('/url', \App\Http\Controllers\Url\StoreController::class)->name('url.store');
Route::get('/url/{url}', \App\Http\Controllers\Url\ShowController::class)->name('url.show');
Route::get('/{code}', \App\Http\Controllers\Url\RedirectController::class);
