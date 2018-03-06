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
Route::get('user', 'UserController@index');

Route::group(['namespace' => 'Web'], function () {
    Route::get('user/registered', 'UserController@registered');
});


Route::group(['namespace' => 'Api', 'prefix' => 'Api'], function () {
    Route::any('Assit/getCaptcha', 'AssitController@getCaptcha');
    Route::any('Assit/valCaptcha', 'AssitController@valCaptcha');

    Route::any('user/registered', 'UserController@registered');
});