<?php


/*
/Unauthenticated group
*/


Auth::routes();
Route::get('/', 'HomeController@index')
    ->name('home');
Route::get('/home', 'HomeController@index')
    ->name('home');
Route::get('/privacy', 'HomeController@privacy')
    ->name('privacy');
Route::get('/av', 'HomeController@av')
    ->name('av');
Route::get('/grid', 'PostController@grid')
    ->name('grid')
    ->middleware('auth');
Route::get('/dashboard', 'DashboardController@index')
    ->name('dashboard')
    ->middleware('auth');
Route::resource('posttypes', 'PostTypeController')
    ->middleware('auth');
Route::resource('posts', 'PostController')
    ->middleware('auth');
Route::post('/updatepost', 'PostController@edit');
Route::resource('media', 'MediaController')
    ->middleware('auth');
Route::get('/contact', 'ContactController@contact')
    ->name('contact');
