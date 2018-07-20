<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Rules\ChinaName;
use App\Rules\IdCard;
use App\Rules\Mobile;
use App\Rules\Password;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    /**
     * 检测是否存在
     * @param Request $request
     * @return 检测是否存在
     */
    public function existMobile(Request $request)
    {
        $this->validate($request, [
            'mobile' => ['required', new Mobile()]
        ]);
        $mobile = User::where('user_mobile', $request->input('mobile'))->first(['user_mobile']);
        if (is_null($mobile)) {
            return 'true';
        }
        return 'false';
    }

    /**
     *创建一个新的用户
     * @param Request $request
     * @return 创建一个新的用户
     */
    public function newUser(Request $request)
    {
        $mobile = User::where('user_mobile', $request->input('mobile'))->first(['user_mobile']);
        if (is_null($mobile)) {
            $bool = User::create(['user_mobile' => $request->input('mobile')]);
            if ($bool) {
                return parent::success();
            }
            return parent::error('注册失败');
        }
        return parent::error('已存在该用户');
    }

    /**
     * 用户密码登录
     * @return  用户密码登录
     */
    public function loginByPassword(Request $request)
    {
        $this->validate($request, [
            'mobile' => ['required', new Mobile()],
            'password' => ['required', new Password()],
            'imgCode' => ['required']
        ]);
        if (strtoupper(session('code')) != strtoupper($request->input('imgCode'))) {
            return static::error('图形验证码不争取');
        }
        $user = User::where('user_mobile', $request->input('mobile'))->select(User::$filed)->first();
        if (is_null($user)) {
            return static::error('不存在该账号');
        }
        if ($user->user_password != $request->input('password')) {
            return static::error('账号或者密码错误');
        }
        // session(['user_mobile' => $user->user_nickname, 'user_id' => $user->user_id]);
        User::UserLogin($request->input('mobile'), $request->getClientIp());
        return static::success();
    }

    /**
     * 用户密码登录
     * @return 短信验证码登陆
     */
    public function loginBySMSCode(Request $request)
    {
        $this->validate($request, [
            'code' => ['required'],
            'mobile' => ['required', new Mobile()],
            'NoteCode' => ['required']
        ]);
        if (strtoupper($request->input('code')) !== strtoupper(session('code'))) {
            return static::error('图像验证码错误');
        }
        if (session('NoteCode') == $request->input('NoteCode') && session('mobile') == $request->input('mobile')) {
            User::UserLogin($request->input('mobile'), $request->getClientIp());
            return static::success();
        }
        return static::error('登陆失败');
    }

    /**
     * 更新基础信息
     * @param Request $request
     * @return string|更新基础信息
     */
    public function updateBaseInfo(Request $request)
    {
        $this->validate($request, [
            'nickName' => ['required'],
            'name' => ['required'],
            'idCard' => ['required']
        ]);
        $bool = User::where(['user_id' => session('user_id', 2)])->update([
            'user_name' => $request->input('name'),
            'user_idcard' => $request->input('idCard'),
            'user_nickname' => $request->input('name'),
            'user_images' => $request->input('header')
        ]);
        if ($bool) {
            return static::success();
        } else {
            return static::error();
        }
    }

}
