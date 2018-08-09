<?php


/*
/Unauthenticated group
*/


Auth::routes();
Route::get('/', 'HomeController@index')
    ->name('home');
Route::get('/home', 'HomeController@index')
    ->name('home');
Route::get('/grid', 'PostController@grid')
    ->name('grid');

Route::resource('posttypes', 'PostTypeController');
Route::resource('posts', 'PostController');