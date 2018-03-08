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
Route::group(['namespace' => 'Web'], function () {
    Route::get('user/registered', 'UserController@registered');
    Route::get('user', 'UserController@index');
    Route::get('user/login', 'UserController@login');

    Route::get('personal/message', 'PersonalController@message');

    Route::get('good/detailed/{id?}', 'GoodController@detailed');
});
Route::group(['namespace' => 'Api', 'prefix' => 'api'], function () {
    Route::any('assit/getCaptcha', 'AssitController@getCaptcha');
    Route::any('assit/valCaptcha', 'AssitController@valCaptcha');
    Route::any('assit/sendSMS', 'AssitController@sendSMS');
    Route::any('assit/valSMS', 'AssitController@valSMS');

    Route::any('user/registered', 'UserController@registered');
    Route::any('user/hasTelephone', 'UserController@hasTelephone');
    Route::any('user/loginTelephone', 'UserController@loginTelephone');
    Route::any('user/login', 'UserController@login');

    Route::any('personal/getMessage/{id?}', 'PersonalController@getUserMessage');
});