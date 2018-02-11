<?php

Route::get('/', 'HomeController@index');
Route::get('/home', function() {
    return redirect('/');
});

Auth::routes();