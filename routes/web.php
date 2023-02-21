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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if(session()->has('mgmt-login')) {
        $value = session()->get('mgmt-login');
    } else $value = false;
    return view('layouts.main', ['session' => $value]);
}); 

Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/show', 'ProductController@show')->name('products.show');
Route::get('/products/create', 'ProductController@create')->name('products.create');

Route::get('login', 'LoginController@index')->name('login');
Route::post('login', 'LoginController@login')->name('auth.login');
Route::get('logout', 'LoginController@logout')->name('logout');