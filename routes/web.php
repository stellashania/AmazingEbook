<?php

use App\Http\Controllers\EbookController;
use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// })->name('/');

Route::get('/', [PageController::class, 'index'])->name('/');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cart', [PageController::class, 'cart'])->name('cart');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/saved', [PageController::class, 'saved'])->name('saved');

// EBOOK DETAIL ===================================================================================================
Route::get('/ebook-detail/{id}', [EbookController::class, 'getEbookDetail'])->name('ebook-detail');
Route::get('/rent/{id}', [EbookController::class, 'rent'])->name('rent');

Route::get('/success', [PageController::class, 'success'])->name('success');

Route::get('/account-maintenance', [PageController::class, 'account_maintenance'])->name('account-maintenance');
Route::get('/update-role', [PageController::class, 'update_role'])->name('update-role');

Route::get('/logout-success', [PageController::class, 'logout_success'])->name('logout-success');

Auth::routes();
