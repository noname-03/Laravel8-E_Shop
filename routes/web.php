<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

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
Route::get('auth/facebook', [App\Http\Controllers\Auth\LoginController::class, 'facebook']);
Route::get('auth/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'callback_facebook']);
Route::get('/test', [App\Http\Controllers\HomeController::class, 'hai'])->name('hai');
Route::view('/coba', 'home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/// arahkan ke link ini ketika user klik "login with google"
Route::get('auth/google', [App\Http\Controllers\Auth\LoginController::class, 'google']);
/// siapkan route untuk menampung callback dari google
Route::get('auth/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'google_callback']);
Route::resource('cart', CartController::class);
