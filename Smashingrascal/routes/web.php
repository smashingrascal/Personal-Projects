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
Route::get('/ChecklN', function () {
    return view('pages/ChecklN');
});
Route::get('/lNQueue', function () {
    return view('pages/lNQueue');
});

Route::get('/lNtouch', function () {
    return view('pages/lNtouch');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
