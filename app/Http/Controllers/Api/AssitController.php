<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models;
use App\Rules;

class AssitController extends Controller
{

    /**
     * 获取验证码路径
     */
    public function getCaptcha()
    {
        $captcha = new Models\Captcha();
        return $captcha->Captcha();
    }

    /**
     * 验证是否正确
     * @param Request $request
     * @return bool
     */
    public function valCaptcha(Request $request)
    {

        if ($request->session()->has('captcha')) {
            if ($request->input('captcha') == session('captcha')) {
                return true;
            }
            return false;
        }
        return false;
    }


    /**
     * 发送短信验证码
     * @param Request $request
     * @return int
     */
    public function sendSMS(Request $request)
    {
        $this->validate($request, [
            'telephone' => ['required', new Rules\Telephone()]
        ]);
        $sms = rand(1000, 9999);
        session(['telephone' => $request->input('telephone'), 'sms' => $sms]);
        return $sms;
    }

    /**
     * 验证短信验证码
     * @param Request $request
     * @return bool
     */
    public function valSMS(Request $request)
    {
        $this->validate($request, [
            'telephone' => ['required', new Rules\Telephone()],
            'sms' => 'required'
        ]);
        if ($request->input('telephone') == session('telephone') && session('sms') == $request->input('sms')) {
            return true;
        } else {
            return false;
        };
    }

}
