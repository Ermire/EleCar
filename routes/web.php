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


Route::get('/account', function () {
    return view('account');
})->middleware(['auth'])->name('account');


Route::get('/offre', function () {
    return view('offre');
})->middleware(['auth'])->name('offre');

Route::get('/contact', function () {
    return view('contact');
})->middleware(['auth'])->name('contact');

Route::get('/detail', function () {
    return view('detail');
})->middleware(['auth'])->name('detail');
Route::get('/detail', 'App\Http\Controllers\Controller@showDetailCar')->name('detail');

Route::post('/reservation', function () {})->middleware(['auth'])->name('reservation');
Route::post('/reservation', 'App\Http\Controllers\Controller@locateCar')->name('reservation');

Route::get('/ajouter', function () {
    return view('ajouter');
})->middleware(['auth'])->name('ajouter');
Route::get('/ajouter', 'App\Http\Controllers\Controller@showDetailCar')->name('ajouter');

require __DIR__ . '/auth.php';
