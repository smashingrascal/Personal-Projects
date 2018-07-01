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

Route::get('/', 'PageController@getWelcomePage');
Route::get('/ChecklN', 'PageController@getChecklNPage');
Route::get('/lNQueue', 'PageController@getlNQueuePage');

Route::get('/lNtouch', 'PageController@getlNtouchPage');
Route::post('/lNtouch',['as'=>'resizeImagePost','uses'=>'ImageController@resizeImagePost']);

Route::get('/lNstyle', 'PageController@getlNstylePage');
Route::post('lNstyle/add', 'DesignController@Ssaveheader');
Route::get('/lNstyle/destroy/{id}', 'DesignController@destroy');

Route::get('/Endouble', 'PageController@getEndouble');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
