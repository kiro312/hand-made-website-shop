<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemCategoryController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ItemOfferController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderStatusesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;



Route::prefix('admin')->middleware('auth', 'verified', 'isAdmin')->group(
    function () {
        Route::get('/dashboard', function () {
            return view('Admin.dashboard');
        })->name('dashboard');

        Route::get('/categories/categories', function () {
            return view('Admin.categories.category');
        })->name('categories.categories');
        Route::resource('/categories', CategoryController::class);

        Route::get('/items/items', function () {
            return view('Admin.items.items');
        })->name('items.items');
        Route::resource('/items', ItemController::class);


        Route::controller(ItemCategoryController::class)->group(function () {
            Route::get('items-categories/create', 'create')->name('items-categories.create');
            Route::post('items-categories/store', 'store')->name('items-categories.store');
            Route::post('items-categories/delete_category', 'delete_category')->name('items-categories.delete_category');
        });

        Route::get('/offers/offers', function () {
            return view('Admin.offers.offers');
        })->name('offers.offers');
        Route::resource('offers', OfferController::class);

        Route::controller(ItemOfferController::class)->group(function () {
            Route::get('items-offers/create', 'create')->name('items-offers.create');
            Route::post('items-offers/store', 'store')->name('items-offers.store');
            Route::post('items-offers/delete_offer', 'delete_offer')->name('items-offers.delete_offer');
        });

        Route::get('/payments/payments', function () {
            return view('Admin.payments.payments');
        })->name('payments.payments');
        Route::resource('payments', PaymentController::class);

        Route::get('/order-statuses/order-statuses', function () {
            return view('Admin.order-statuses.order_statuses');
        })->name('order-statuses.order-statuses');
        Route::resource('order-statuses', OrderStatusesController::class);

        Route::get('/users/users', function () {
            return view('Admin.users.users');
        })->name('users.users');
        Route::controller(UserController::class)->group(function () {
            Route::get('users/', 'index')->name('users.index');
            Route::get('users/{user}', 'show')->name('users.show');
            Route::delete('users/{user}', 'destroy')->name('users.destroy');
        });

        Route::get('/orders/orders', function () {
            return view('Admin.orders.orders');
        })->name('orders.orders');
        Route::controller(OrderController::class)->group(function () {
            Route::get('all-orders/', 'getAllWaitingOrdersForAdmin')->name('order.getAllWaitingOrdersForAdmin');
            Route::get('all-orders-confirmed/', 'getAllConfirmedOrdersForAdmin')->name('order.getAllConfirmedOrdersForAdmin');
            Route::get('confirm-order/{order}', 'confirmOrder')->name('order.confirmOrder');
            Route::get('orders/{order}/{key}', 'showOrderAdmin')->name('admin.orders.show');
        });

        Route::controller(ProfileController::class)->group(function () {
            Route::get('/profile', 'edit')->name('profile.edit');
            Route::patch('/profile', 'update')->name('profile.update');
            Route::delete('/profile', 'destroy')->name('profile.destroy');
        });
    }


);
