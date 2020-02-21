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

Route::resource('HajjRegistrationForm', 'HajjController');
Route::resource('UmrahRegistrationForm', 'UmrahController');
// Route::get('/Hajj', function () {
//     return view('hajj');
// });

Route::get('/HajjRegistrationSuccess', function () {
    return view('successHajj');
});

Route::get('/UmrahRegistrationSuccess', function () {
    return view('successUmrah');
});

Auth::routes();

Route::resources(['pdf' => 'PDFController']); 
Route::get('pdfexport/{id}', 'PDFController@pdfexport');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('{path}',"HomeController@index")->where('path','[-a-z0-9_\s]+');
Route::get('/{vue_capture?}', function () {
    return view('home');
})->where('vue_capture', '[\/\w\.-]*');
// Route::get('{any}', function () {
//     return view('home');
// })->where('any','.*');
// Route::get('{path}', 'HomeController@index')->where('path', '([A-z\d-\/_.]+?)');
