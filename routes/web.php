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

Route::get('/shop', 'ShopController@index')->name('shop.index');

Route::get('/cart', function(){
    return view('cart.cart');
})->name('cart');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
