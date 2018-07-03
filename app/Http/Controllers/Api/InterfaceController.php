<?php

namespace App\Http\Controllers\Api;

use App\Models\NoteLog;
use App\Models\User;
use App\Rules\Mobile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InterfaceController extends Controller
{
    /**
     * 发送短信验证码
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
            NoteLog::create(['note_mobile' => $request->input('mobile'), 'note_time' => $_SERVER['REQUEST_TIME'], 'note_explain' => '注册短信验证']);
            return static::success($code);
        }
        return static::error();
    }

    /**
     * 短信验证
     * @param Request $request
     * @return 短信验证
     */
    public static function noteValidate(Request $request)
    {
        if (session('code') == $request->input('code') && session('mobile') == $request->input('mobile')) {
            return 'true';
        } else {
            return 'false';
        }
    }

}
