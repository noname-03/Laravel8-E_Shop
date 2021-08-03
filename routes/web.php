<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;


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


//test
// test
// Route::view('/coba', 'product.index')->name('coba');
// Route::view('/kategori', 'category.index')->name('kategori');
//end test
// Route::get('/', function () {
//     return view('welcome');
// });


//home
Route::get('shop', [App\Http\Controllers\EshopController::class, 'index'])->name('eshop.index');
Route::get('tes', [App\Http\Controllers\EshopController::class, 'tes'])->name('eshop.tes');
Route::get('/product/category/{category_id:name}', [App\Http\Controllers\EshopController::class, 'show'])->name('eshop.show');
Route::get('product/show/{id:name}', [App\Http\Controllers\EshopController::class, 'productshow'])->name('eshop.show.product');

Auth::routes();

// auth
Route::get('auth/facebook', [App\Http\Controllers\Auth\LoginController::class, 'facebook']);
Route::get('auth/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'callback_facebook']);
Route::get('/test', [App\Http\Controllers\HomeController::class, 'hai'])->name('hai');

// auth google
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/// arahkan ke link ini ketika user klik "login with google"
Route::get('auth/google', [App\Http\Controllers\Auth\LoginController::class, 'google']);
/// siapkan route untuk menampung callback dari google
Route::get('auth/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'google_callback']);
Route::get('/', function () {
    return redirect('/shop');
});
Route::middleware(['auth'])->group(function () {

    Route::middleware(['admin'])->group(function () {
        // data
        // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
        Route::resource('category', CategoryController::class)->parameters([
            'category' => 'category:name',
        ]);
        Route::resource('product', ProductController::class);
        Route::resource('user', UserController::class);
        Route::get('datatransaction', [App\Http\Controllers\TransactionController::class, 'datatransaction'])->name('datatransaction');
        Route::get('datatransactionshow/{transaction}', [App\Http\Controllers\TransactionController::class, 'datatransactionshow'])->name('datatransactionshow');
    });

    Route::middleware(['user'])->group(function () {
        // user
        // Route::get('user', [UserController::class, 'index']);
        Route::resource('cart', CartController::class);
        // Route::get('getcart', [CartController::class 'indexjson'])->name('getcart');
        Route::patch('update-cart', [CartController::class, 'tes'])->name('update.cart');
        Route::resource('transaction', TransactionController::class);
    });

    Route::get('/logout', function() {
        Auth::logout();
        redirect('/login');
    });

});
