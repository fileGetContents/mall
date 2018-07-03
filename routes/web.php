<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace' => 'Web'], function () {
    Route::get('/', 'HomeController@index');

    Route::group(['prefix' => 'user'], function () {
        Route::get('register', 'UserController@register');
        Route::get('login', 'UserController@login');
    });
});

Route::group(['namespace' => 'Api', 'prefix' => 'api'], function () {
    Route::any('getCaptcha', 'ApiController@getCaptcha');
    Route::post('captchaValidation', 'ApiController@captchaValidation');
    Route::get('test', 'ApiController@test');

    Route::group(['prefix' => 'user'], function () {
        Route::post('existMobile', 'UserController@existMobile');
        Route::post('newUser', 'UserController@newUser');
    });

    Route::group(['prefix' => 'interface'], function () {
        Route::post('seedNoteValidate', 'InterfaceController@seedNoteValidate');
        Route::post('noteValidate', 'InterfaceController@noteValidate');
    });
});


Route::any('crate', 'CacheController@crate');
// 聊天体系 待完善
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
    Route::get('test', 'ServerController@test');                                  //
});


