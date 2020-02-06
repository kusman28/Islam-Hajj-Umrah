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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('profile', 'API\UserController@profile');
Route::apiResources(['user' => 'API\UserController']);
Route::apiResources(['hajj' => 'API\HajjController']);

Route::get('registered', 'API\HajjController@registered');
Route::get('hajjDocx', 'API\HajjController@hajjDocx');

// Route::get('pendingRegistration/'{id}, 'API\HajjController@show');
