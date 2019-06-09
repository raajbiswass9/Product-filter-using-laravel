<?php

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



Route::get('/', 'ProductsController@get_products');

Route::get('/all-products', 'ProductsController@get_products');

Route::get('/jeans', 'ProductsController@get_jeans');

Route::get('/shirts', 'ProductsController@get_shirts');

Route::get('/search', 'ProductsController@filter_products');


