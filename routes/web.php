<?php


/*
/Unauthenticated group
*/
Route::get('/', 'HomeController@show')
    ->name('homepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
