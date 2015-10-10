<?php

/* CMS routes */

Route::group(['prefix' => 'admin'], function(){

    Route::get('login', 'CMS\HomeController@getLogin');

    Route::group(['middleware' => 'auth'], function() {
        Route::controller('/', 'CMS\HomeController');
    });
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);