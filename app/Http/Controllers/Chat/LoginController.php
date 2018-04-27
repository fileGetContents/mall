<?php

namespace App\Http\Controllers\Chat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Chat\User;

class LoginController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login()
    {
        return view(static::$CHAT . 'login');
    }

    /**
     * 登录请求
     * @param Request $request
     * @return string
     */
    public function loginRequest(Request $request)
    {
        $user = User::select(User::$file)->where(['name' => $request->input('name')])->first();
        if (is_null($user)) {
            return static::error('没有该用户');
        }
        if (decrypt($user->password) != $request->input('password')) {
            return static::error('密码错误');
        }
        session(['id' => $user->id, 'name' => $user->name]);
        return static::success(url('room/lists'));
    }
}
