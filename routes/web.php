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
        Route::get('register', 'UserController@register'); // 用户注册
        Route::get('login', 'UserController@login');      // 用户登录
        Route::get('test', 'UserController@test');
    });
    Route::group(['prefix' => 'personal'], function () {
        Route::get('baseInfo', 'PersonalController@baseInfo'); // 用户基础信息
    });
});

Route::group(['namespace' => 'Api', 'prefix' => 'api'], function () {
    Route::any('getCaptcha', 'ApiController@getCaptcha'); // 获取图形验证码
    Route::post('captchaValidation', 'ApiController@captchaValidation'); // 验证图形验证码
    Route::get('test', 'ApiController@test');

    Route::group(['prefix' => 'user'], function () {
        Route::post('existMobile', 'UserController@existMobile'); // 检测是否存在电话号码
        Route::post('newUser', 'UserController@newUser'); // 创建新的用户
        Route::post('loginByPassword', 'UserController@loginByPassword'); // 用密码登录
        Route::post('loginBySMSCode', 'UserController@loginBySMSCode'); // 用户短信登陆
    });

    Route::group(['prefix' => 'interface'], function () {
        Route::post('seedNoteValidate', 'InterfaceController@seedNoteValidate'); // 发送短信验证码
        Route::post('noteValidate', 'InterfaceController@noteValidate');         //  验证短信验证码
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


