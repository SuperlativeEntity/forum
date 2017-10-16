<?php

Route::get('/', function ()
{
    return view('welcome');
});

Route::get('/threads','ThreadsController@index')->name('threads.index');
Route::get('/threads/{thread}','ThreadsController@show')->name('threads.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');