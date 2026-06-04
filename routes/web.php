<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerDashboardController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard',
[CustomerDashboardController::class,'index'])
->middleware(['auth'])
->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::post('/orders/cancel/{id}',
        [CustomerDashboardController::class,'cancelOrder']);

    Route::post('/orders/received/{id}',
        [CustomerDashboardController::class,'receivedOrder']);

    Route::get('/profile',
        [ProfileController::class,'edit'])
        ->name('profile.edit');

    Route::patch('/profile',
        [ProfileController::class,'update'])
        ->name('profile.update');

    Route::delete('/profile',
        [ProfileController::class,'destroy'])
        ->name('profile.destroy');

    Route::get('/customer-dashboard',
        [CustomerDashboardController::class,'index']);

    Route::get('/products',
        [CustomerDashboardController::class,'products'])
    ->name('products');

    Route::get('/cart',
        [CustomerDashboardController::class,'cart'])
    ->name('cart');

    Route::get('/orders',
        [CustomerDashboardController::class,'orders']);

    Route::get('/wishlist',
        [CustomerDashboardController::class,'wishlist']);

    Route::get('/customer-profile',
        [CustomerDashboardController::class,'profile']);

    Route::post('/customer-profile/update',
        [CustomerDashboardController::class,'updateProfile']);

    Route::post('/cart/add',
        [CustomerDashboardController::class,'addCart'])
        ->middleware('auth');
    Route::post('/cart/increase/{id}',
        [CustomerDashboardController::class,'increaseQty']);

    Route::post('/cart/decrease/{id}',
        [CustomerDashboardController::class,'decreaseQty']);

    Route::post('/cart/remove/{id}',
        [CustomerDashboardController::class,'removeCart']);
    
    Route::post('/checkout/{id}',
        [CustomerDashboardController::class,'checkout']);

    Route::post('/cart/clear',
        [CustomerDashboardController::class,'clearCart']);
    
    Route::post('/wishlist/add',
        [CustomerDashboardController::class,'addWishlist']);

    Route::post('/wishlist/remove/{id}',
        [CustomerDashboardController::class,'removeWishlist']);

    Route::post('/wishlist/clear',
        [CustomerDashboardController::class,'clearWishlist']);
        }); // TUTUP GROUP DI SINI
    Route::post('/orders/cancel/{id}',
        [CustomerDashboardController::class,'cancelOrder']);

    Route::post('/orders/received/{id}',
        [CustomerDashboardController::class,'receivedOrder']);
require __DIR__.'/auth.php';