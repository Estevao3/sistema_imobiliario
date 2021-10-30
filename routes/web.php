<?php

Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'as' => 'admin.'], function (){

    Route::get('/', 'AuthController@showLoginForm')->name('login');
    Route::post('login', 'AuthController@login')->name('login.do');

    Route::get('home', 'AuthController@home')->name('home');
});

