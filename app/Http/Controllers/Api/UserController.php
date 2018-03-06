<?php

namespace App\Http\Controllers\Api;

use App\User;
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
        $this->validate($request, ['name' => ['required', new Rules\Name()],
            'password' => ['required', new Rules\Password()],
            'bpasswored' => 'required',
            'telephone' => ['required', new Rules\Telephone()],
            'code' => ['required']
        ]);
        $all = $request->all();
        // 短信验证码
        if ($all['telephone'] == session('telephone') && session('sms') == $all['sms'] && $all['captcha'] == session('captcha')) {
            return true;
        } else {
            return false;
        }
    }
}
