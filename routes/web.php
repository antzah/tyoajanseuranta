<?php

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Auth::routes();