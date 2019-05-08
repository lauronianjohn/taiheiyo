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

Route::get('/', 'CementController@dashboard');
Route::get('cement/reports', 'CementController@reports')->name('cement.reports');
Route::post('cement/reports/', 'CementController@choosedate')->name('cement.choosedate');
Route::resource('cement','CementController');
Route::resource('types','TypeController');