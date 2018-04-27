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
    Route::get('user2', 'UserController@index2');
    Route::get('user/login', 'UserController@login');
    Route::get('user/order/{id}', 'UserController@order')->where(['id' => '[0-9]+']);

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
    Route::any('personal/saveAddress', 'PersonalController@saveAddress');

    Route::any('order/create', 'OrderController@create');
    Route::any('rushPurchase', 'OrderCOntroller@rushPurchase');
});


Route::any('crate', 'CacheController@crate');

Route::group(['namespace' => 'Chat', 'prefix' => 'chat'], function () {
    Route::any('index', 'ChatController@index');                                  // 界面展示
    Route::any('say', 'ChatController@say');                                      // 推送接口
    Route::any('bindUid', 'ChatController@bindUid');                              // 绑定id
    Route::any('getUserList', 'ChatController@getUserList');                      // 获取在线人数

    Route::any('login', 'LoginController@login');                                 // 登录
    Route::post('loginRequest', 'LoginController@loginRequest');                  // 登录请求
    Route::get('lists', 'RoomController@lists');                                  // 房间列表
    Route::get('room/{id?}', 'RoomController@room');                              // 房间
    Route::post('bindAndGroup', 'ServerController@bindAndGroup');                 // 加入房间准备程序
    Route::any('getUserLists', 'ServerController@getUserLists');                  // 获取在线用户信息
});


