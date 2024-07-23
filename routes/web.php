<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;


Route::get('/', [ShopController::class, 'home']);
Route::get('about', [ShopController::class, 'about']);
Route::get('services', [ShopController::class, 'services']);
Route::get('contact', [ShopController::class, 'contact']);
Route::get('product', [ShopController::class, 'product']);
Route::get('team', [ShopController::class, 'team']);
Route::get('blog', [ShopController::class, 'blog']);
Route::get('blog-details', [ShopController::class, 'blog_details']);
Route::get('profile', [ShopController::class, 'profile']);
Route::get('eprofile', [ShopController::class, 'eprofile'])->middleware('auth');

