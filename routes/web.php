<?php

use App\Http\Controllers\EbookController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// HOME AND INDEX ================================================================================================
Route::get('/', [PageController::class, 'index'])->name('/');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('logincheck');

// ORDER ==========================================================================================================
Route::get('/cart', [OrderController::class, 'display_all'])->name('cart')->middleware('logincheck');
Route::post('/delete-order/{order_id}', [OrderController::class, 'delete_order'])->name('delete-order')->middleware('logincheck');
Route::post('/submit-order', [OrderController::class, 'submit_order'])->name('submit-order')->middleware('logincheck');

// PROFILE ========================================================================================================
Route::get('/profile', [UserController::class, 'display_profile'])->name('profile')->middleware('logincheck');
Route::post('/update-profile', [UserController::class, 'update_profile'])->name('update-profile')->middleware('logincheck');
Route::get('/saved', [PageController::class, 'saved'])->name('saved')->middleware('logincheck');

// EBOOK DETAIL ===================================================================================================
Route::get('/ebook-detail/{id}', [EbookController::class, 'getEbookDetail'])->name('ebook-detail')->middleware('logincheck');
Route::post('/rent/{id}', [OrderController::class, 'rent'])->name('rent')->middleware('logincheck');
Route::get('/success', [PageController::class, 'success'])->name('success')->middleware('logincheck');

// ACCOUNT MAINTENANCE ============================================================================================
Route::get('/account-maintenance', [UserController::class, 'display_all'])->name('account-maintenance')->middleware('rolecheck:1');
Route::get('/update-user/{id}', [UserController::class, 'update_user'])->name('update-user')->middleware('rolecheck:1');
Route::post('/update-role/{id}', [UserController::class, 'update_role'])->name('update-role')->middleware('rolecheck:1');
Route::post('/delete-user/{id}', [UserController::class, 'delete_user'])->name('delete-user')->middleware('rolecheck:1');

// LOGOUT SUCCESS =================================================================================================
Route::get('/logout-success', [PageController::class, 'logout_success'])->name('logout-success');

Auth::routes();
