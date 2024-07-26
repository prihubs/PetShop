<?php

use App\Http\Controllers\AccessController;
use App\Http\Controllers\uLogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SessionController;


Route::get('/', [ShopController::class, 'home']);
Route::get('about', [ShopController::class, 'about']);
Route::get('services', [ShopController::class, 'services']);
Route::get('contact', [ShopController::class, 'contact']);
Route::get('product', [ShopController::class, 'product']);
Route::get('team', [ShopController::class, 'team']);
Route::get('blog', [ShopController::class, 'blog']);
Route::get('blog-details', [ShopController::class, 'blog_details']);
Route::get('profile', [ShopController::class, 'profile']);

Route::get('eprofile', [ShopController::class, 'create'])->middleware('auth');
Route::put('profile', [ShopController::class, 'store'])->middleware('auth');

Route::get('mykey', [AccessController::class, 'accControl']);
Route::get('desKey/{id}', [AccessController::class, 'destroyKey'])->middleware('auth');
Route::get('Create', [AccessController::class, 'generate'])->middleware('auth');

Route::get('signup', [SessionController::class, 'create']);
Route::post('profile', [SessionController::class, 'store']);
Route::get('logout', [SessionController::class, 'destroy']);

Route::get('login', [uLogController::class, 'create'])->name('login');
Route::post('login', [uLogController::class, 'store'])->middleware('auth');

