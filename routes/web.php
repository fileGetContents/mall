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
    Route::get('user/order', 'UserController@order');

    Route::get('personal/message', 'PersonalController@message');
    Route::get('personal/address', 'PersonalController@address');

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
    Route::any('user/collAdd', 'UserController@collectionAdd');

    Route::any('personal/getMessage/{id?}', 'PersonalController@getUserMessage');
});

Route::get('cookieset', function () {
    $user_info = array('name' => 'laravel', 'age' => 13);
    //7m $user = Cookie::queue('user', $user_info, 30);
    dd(Cookie::get('user'));
    //return Response::make()->withCookie($user);
});

Route::get('cookietest', function () {
    dd(Cookie::get('user'));
});