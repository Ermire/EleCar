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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', 'App\Http\Controllers\Controller@index')->name('dashboard');

Route::get('/detail', function () {
    return view('detail');
})->middleware(['auth'])->name('detail');
Route::get('/detail', 'App\Http\Controllers\ShowCarController@index')->name('detail');

require __DIR__ . '/auth.php';
