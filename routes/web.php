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

Route::get('home', function() {
    $value = session('key');
    session(['key' => 'value']);
});

Route::get('/', function () {
    return view('layouts.main');
}); 

Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/show', 'ProductController@show')->name('products.show');

Route::get('login', 'LoginController@index')->name('login');
Route::post('login', 'LoginController@login')->name('auth.login');