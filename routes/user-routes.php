<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MainPageController;

Route::middleware('auth', 'verified')->group(
    function () {
        Route::controller(CartController::class)->group(function () {
            Route::post('/add-to-cart', 'addToCart')->name('cart.add');
            Route::delete('/remove-from-cart', 'RemoveFromCart')->name('cart.remove');
            Route::post('/change-qt-in-cart', 'changeItemQtInCart')->name('cart.changeQt');
        });

        Route::controller(OrderController::class)->group(function () {
            Route::post('/make-order', 'makeOrder')->name('order.make');
        });

        Route::controller(MainPageController::class)->group(function () {
            Route::get('/main-page', 'index')->name('main.index');
            Route::get('/cart-page', 'getUserCart')->name('main.cart');
        });
    }
);
