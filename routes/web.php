<?php
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/captains', 'CaptainsController@index');
Route::get('/captains/create', 'CaptainsController@showCreatePage');
Route::post('/captains', 'CaptainsController@store');

Route::get('/schedule', 'SchedulesController@schedule');
Route::post('/schedule', 'SchedulesController@store');
