<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['api', 'jwt.auth']], function () {
    Route::post('authenticate',  'AuthenticateController@authenticate');
    Route::get('logout',  'AuthenticateController@logout');
    Route::get('index',  'WelcomeController@index');
    Route::get('me',  'AuthenticateController@getCurrentUser')->middleware('jwt.auth');
});
