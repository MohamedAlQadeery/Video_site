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




Route::group(['prefix'=>'admin','namespace'=>'BackEnd'],function (){
    Route::get('home','HomeController@index');
    Route::resource('users','UsersController');
    Route::resource('categories','CategoriesController');
});



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
