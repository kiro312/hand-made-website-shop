<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\UserProfileController;

Route::middleware('auth', 'verified', 'isUser')->group(
    function () {
        Route::controller(CartController::class)->group(function () {
            Route::post('/add-to-cart', 'addToCart')->name('cart.add');
            Route::delete('/remove-from-cart', 'RemoveFromCart')->name('cart.remove');
            Route::post('/change-qt-in-cart', 'changeItemQtInCart')->name('cart.changeQt');
        });

        Route::controller(OrderController::class)->group(function () {
            Route::post('/make-order', 'makeOrder')->name('order.make');
            Route::post('/delete-order', 'deleteOrder')->name('order.delete');
            Route::get('/show-order/{order}/{key}', 'showOrder')->name('order.show');
            // Route::get('/show-order/{order}', 'showOrder')->name('order.show');
        });

        Route::controller(MainPageController::class)->group(function () {
            Route::get('/main-page', 'index')->name('main.index');
            Route::get('/cart-page', 'getUserCart')->name('main.cart');
            Route::get('/orders-page/{key}', 'getUserOrders')->name('main.orders');
        });

        Route::controller(UserProfileController::class)->group(function () {
            Route::get('/profile', 'edit')->name('user.profile.edit');
            Route::patch('/profile', 'update')->name('user.profile.update');
            Route::delete('/profile', 'destroy')->name('user.profile.destroy');
        });
    }
);
