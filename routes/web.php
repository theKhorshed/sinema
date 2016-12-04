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

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(['prefix' => 'admin'], function () {
	
	Route::get('dashboard', 'PagesController@dashboard');
    
    Route::resource('movies', 'MoviesController');
    Route::resource('halls', 'HallsController');
    Route::resource('shows', 'ShowsController');

});