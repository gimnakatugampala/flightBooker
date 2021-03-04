<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UtilityController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\UtilityController::class, 'about'])->name('about');
Route::get('/services', [App\Http\Controllers\UtilityController::class, 'services'])->name('services');

Route::get('/contact', [App\Http\Controllers\UtilityController::class, 'contact'])->name('contact');
Route::post('/contact', [App\Http\Controllers\UtilityController::class, 'store'])->name('contact.store');

Route::get('/booking', [BookController::class, 'index'])->name('booking');
Route::post('/booking', [BookController::class, 'store'])->name('booking.store');

Route::delete('/booking/{id}', [HomeController::class, 'destroy'])->name('booking.destroy');
Route::delete('/contact/{id}', [HomeController::class, 'delete'])->name('contact.destroy');
