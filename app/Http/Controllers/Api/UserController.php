<?php

namespace App\Http\Controllers\Api;

use App\Models;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rules;

class UserController extends Controller
{


    /**
     * 用户注册
     * @param Request $request
     * @return bool
     */
    public function registered(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', new Rules\Name()],
            'password' => ['required', new Rules\Password()],
            'bpasswored' => 'required',
            'telephone' => ['required', new Rules\Telephone()],
            'code' => ['required'],
            'captcha' => ['required']
        ]);
        $all = $request->all();
        // 短信验证码
        if ($all['telephone'] == session('telephone') && session('sms') == $all['code'] && strtolower($all['captcha']) == strtolower(session('captcha'))) {
            $user = Models\User::where('user_telephone', $request->input('telephone'))->first();
            if (is_null($user)) {
                $save = new Models\User();
                $save->user_nickname = $all['name'];
                $save->user_password = encrypt($all['password']);
                $save->user_telephone = $all['telephone'];
                $save->user_time = $_SERVER['REQUEST_TIME'];
                if ($save->save()) {
                    return 'true';
                } else {
                    return 'false';
                }
            } else {
                return 'false';
            }
        } else {
            return 'false';
        }
    }

    /**
     * 是否存在电话号码
     * @param Request $request
     * @return bool
     */
    public function hasTelephone(Request $request)
    {
        $this->validate($request, [
            'telephone' => ['required', new Rules\Telephone()]
        ]);
        $user = Models\User::where('user_telephone', $request->input('telephone'))->first();
        if (is_null($user)) {
            return 'true';
        } else {
            return 'false';
        }
    }


}
