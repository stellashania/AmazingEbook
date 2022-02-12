<?php

use App\Http\Controllers\EbookController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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

// HOME AND INDEX ================================================================================================
Route::get('/', [PageController::class, 'index'])->name('/');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ORDER ==========================================================================================================
Route::get('/cart', [OrderController::class, 'display_all'])->name('cart');
Route::post('/delete-order/{order_id}', [OrderController::class, 'delete_order'])->name('delete-order');
Route::post('/submit-order', [OrderController::class, 'submit_order'])->name('submit-order');

// PROFILE ========================================================================================================
Route::get('/profile', [UserController::class, 'display_profile'])->name('profile');
Route::post('/update-profile', [UserController::class, 'update_profile'])->name('update-profile');
Route::get('/saved', [PageController::class, 'saved'])->name('saved');

// EBOOK DETAIL ===================================================================================================
Route::get('/ebook-detail/{id}', [EbookController::class, 'getEbookDetail'])->name('ebook-detail');
Route::post('/rent/{id}', [OrderController::class, 'rent'])->name('rent');

Route::get('/success', [PageController::class, 'success'])->name('success');

// ACCOUNT MAINTENANCE ============================================================================================
Route::get('/account-maintenance', [UserController::class, 'display_all'])->name('account-maintenance');
Route::get('/update-user/{id}', [UserController::class, 'update_user'])->name('update-user');
Route::post('/update-role/{id}', [UserController::class, 'update_role'])->name('update-role');
Route::post('/delete-user/{id}', [UserController::class, 'delete_user'])->name('delete-user');


Route::get('/logout-success', [PageController::class, 'logout_success'])->name('logout-success');

Auth::routes();
