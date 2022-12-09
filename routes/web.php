<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemCategoryController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ItemOfferController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class);

Route::resource('items', ItemController::class);

Route::controller(ItemCategoryController::class)->group(function () {
    Route::get('/items-categories/create', 'create')->name('items-categories.create');
    Route::post('/items-categories/store', 'store')->name('items-categories.store');
    Route::post('items-categories/delete_category', 'delete_category')->name('items-categories.delete_category');
});

Route::resource('offers', OfferController::class);

Route::controller(ItemOfferController::class)->group(function () {
    Route::get('/items-offers/create', 'create')->name('items-offers.create');
    Route::post('/items-offers/store', 'store')->name('items-offers.store');
    Route::post('/items-offers/delete_offer', 'delete_offer')->name('items-offers.delete_offer');
});
