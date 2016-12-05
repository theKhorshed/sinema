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

Route::get('/', 'PagesController@home')->name('home');
Route::get('showtimes', 'PagesController@showTimes')->name('showtimes');
Route::get('ticket', 'PagesController@ticket')->name('ticket')->middleware('auth');;

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

	Route::get('/', 'PagesController@dashboard')->name('dashboard');
	Route::get('dashboard', 'PagesController@dashboard')->name('dashboard');

  Route::resource('movies', 'MoviesController');
  Route::resource('halls', 'HallsController');
  Route::resource('shows', 'ShowsController');

});

Route::resource('bookings', 'BookingsController');
