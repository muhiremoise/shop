<?php

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

Route::get('/', 'PagesController@index')->name('index');

Route::get('/shop/{product}', 'ShopController@show')->name('product.show');

Route::get('/shop', 'ShopController@index')->name('shop');

Route::get('/cart', 'CartController@index')->name('cart');

Route::post('/cart', 'CartController@store')->name('cart.store');

Route::post('/cart/saveforlater/{product}', 'CartController@switchToSaveForLater')->name('cart.saveForLater');

Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');


Route::post('/saveforlater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');

Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');

Route::get('empty', function(){
    Cart::instance('saveForLater')->destroy();
});

Route::get('/checkout', function(){
    return view('checkout');
})->name('checkout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'PagesController@productPage')->name('');
