<?php

Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'as' => 'admin.'], function (){
    Route::get('/', 'AuthController@showLoginForm')->name('login');
});
