<?php

use Illuminate\Http\Request;

Route::group(['middleware' => 'api'], function () {
    Route::post('authenticate',  'AuthenticateController@authenticate');
    Route::get('users',  'AuthenticateController@getUsers');

    Route::get('logout',  'AuthenticateController@logout')->middleware('jwt.refresh');

    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::resource('tasks',  'TaskController');
        Route::get('me',  'AuthenticateController@getCurrentUser');
    });
});
