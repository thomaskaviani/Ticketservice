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

Route::get('/', 'WebsiteController@index');
Route::get('/about', 'WebsiteController@about');
Route::get('/events', 'WebsiteController@events');
Route::get('/events/{id}', 'WebsiteController@showEvent');

Route::resource('myevents', 'EventsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');


