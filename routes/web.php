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

Route::get('/{vista}', 'HomeController@index');

Route::post('/services/pay', 'HomeController@payService')->name('services.pay');

Route::get('/', function() {
    return view("index");

});

Route::get('/about', 'AboutController@index');
