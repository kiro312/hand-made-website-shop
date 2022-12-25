<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

Route::middleware('auth', 'verified')->group(
    function () {
        Route::controller(CartController::class)->group(function () {
            Route::post('/add-to-cart', 'addToCart')->name('cart.add');
            Route::delete('/remove-from-cart', 'RemoveFromCart')->name('cart.remove');
            Route::post('/change-qt-in-cart', 'changeItemQtInCart')->name('cart.changeQt');
        });
    }
);

Route::middleware('auth', 'verified')->group(
    function () {
        Route::controller(OrderController::class)->group(function () {
            Route::post('/make-order', 'makeOrder')->name('order.make');
        });
    }
);