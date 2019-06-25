<?php

Auth::routes();

Route::group(['middleware' => ['auth:web']], function() {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/captains', 'CaptainsController@index');
    Route::get('/captains/create', 'CaptainsController@showCreatePage');
    Route::post('/captains', 'CaptainsController@store');
    
    Route::get('/schedule', 'SchedulesController@schedule');
    Route::post('/schedule', 'SchedulesController@store');
});

// - finish calendar
// Whenever the date passes the schedule dissepears DONE
// Calendar needs to run on website load up
// 
