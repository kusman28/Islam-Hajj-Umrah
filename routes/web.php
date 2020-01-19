<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Hajj', 'HajjController');
// Route::get('/Hajj', function () {
//     return view('hajj');
// });

Route::get('/Umrah', function () {
    return dd('Umrah');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
