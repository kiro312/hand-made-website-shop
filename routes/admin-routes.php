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

Route::prefix('admin')->middleware('auth', 'verified', 'isAdmin')->group(
    function () {

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('/dashboard', function () {
            return view('Admin.dashboard');
        })->name('dashboard');

        Route::resource('/categories', CategoryController::class);

        Route::resource('/items', ItemController::class);

        Route::controller(ItemCategoryController::class)->group(function () {
            Route::get('items-categories/create', 'create')->name('items-categories.create');
            Route::post('items-categories/store', 'store')->name('items-categories.store');
            Route::post('items-categories/delete_category', 'delete_category')->name('items-categories.delete_category');
        });

        Route::resource('offers', OfferController::class);

        Route::controller(ItemOfferController::class)->group(function () {
            Route::get('items-offers/create', 'create')->name('items-offers.create');
            Route::post('items-offers/store', 'store')->name('items-offers.store');
            Route::post('items-offers/delete_offer', 'delete_offer')->name('items-offers.delete_offer');
        });

        Route::resource('payments', PaymentController::class);

        Route::resource('order-statuses', OrderStatusesController::class);
    }


);
