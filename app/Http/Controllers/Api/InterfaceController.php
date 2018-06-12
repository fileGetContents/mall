<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Rules\Mobile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InterfaceController extends Controller
{
    /**
     * @param Request $request
     * @return 发送短信验证码
     */
    public function seedNoteValidate(Request $request)
    {
        $this->validate($request, ['mobile' => ['required', new Mobile()]]);
        $mobile = User::where('user_mobile', $request->input('mobile'))->first(['user_mobile']);
        if (is_null($mobile)) {
            $code = rand(10000, 999999);
            session(['code' => $code, 'mobile' => $request->input('mobile'), 'time' => $_SERVER['REQUEST_TIME']]);
            return static::success($code);
        }
        return static::error();
    }

    /**
     * @param Request $request
     * @return 短信验证
     */
    public static function noteValidate(Request $request)
    {
        if (session('code') == $request->input('code')) {
            return 'true';
        }
        return 'false';
    }

}
