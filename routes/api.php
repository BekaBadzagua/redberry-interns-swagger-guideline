<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['controller' => ProductController::class], function () {
	Route::get('/products', 'index')->name('products.index');
	Route::get('/products/{product}', 'get')->name('products.get');
	Route::post('/products', 'store')->name('products.store');
	Route::put('/products/{product}', 'update')->name('products.update');
	Route::delete('/products/{product}', 'destroy')->name('products.destroy');
});
