<?php

namespace App\Http\Controllers\Api;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Methods\Captcha;

class ApiController extends Controller
{
    /**
     * @return  创建二维码
     */
    public static function getCaptcha()
    {
        Captcha::Captcha();
    }

    /**
     * @param Request $request
     * @return 验证码验证
     */
    public static function captchaValidation(Request $request)
    {
        if (strtoupper(session('code')) == strtoupper($request->input('code'))) {
            return 'true';
        } else {
            return 'false';
        }
    }

    public static function test()
    {

    }
}
