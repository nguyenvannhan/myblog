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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'AccountController@getLogin')->name('get_login_route');
Route::post('/login', 'AccountController@postLogin')->name('post_login_route');
Route::get('/register', 'AccountController@getRegister')->name('get_register_route');
Route::post('/register', 'AccountConotroller@postRegister')->name('poste_register_route');

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->namespace('Admin')->group(function() {
    Route::get('/', 'HomeController@index');
    
    // Admin Category Management
    Route::prefix('category')->group(function() {
        Route::get('/', 'CategoryController@index');

        Route::get('/get-add-modal/{id?}', 'CategoryController@getViewModal');
    });
});