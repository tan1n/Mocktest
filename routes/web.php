<?php

Route::get('/','PagesController@home');

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/subject','SubjectController');

    Route::resource('/stats','StatsController');
    
    Route::post('/mock/chapter/{id}','MocktestController@startMocktest')->name('mocktest');

    Route::get('/leaderboard','LeaderBoardController@index')->name('leaderboard');

    Route::get('/community','CommunityController@index')->name('community');

    Route::post('/submit','MocktestController@endMocktest')->name('submit');

    Route::get('/profile/{user}','HomeController@profile')->name('profile');

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
