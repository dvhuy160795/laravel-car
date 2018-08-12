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

Route::group(['prefix' => 'Admin','middleware' => 'auth'],function () {
    Route::get('/Index.html','Admin\Index@index');
    Route::post('/Save.html','Admin\Index@save');
    Route::get('/Login.html','Auth\Login@index');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
