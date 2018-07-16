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
        $this->validate($request, ['mobile' => ['required', new Mobile()], 'code' => ['required']]);
        if (strtoupper($request->input('code')) !== strtoupper(session('code'))) {
            return static::error('图像验证码错误');
        }
        if ($request->session()->has('NoteTime')) {
            if (intval(session('NoteTime')) + 60 > $_SERVER['REQUEST_TIME']) {
                return static::error('1分钟内不能重复发送短信');
            }
        }
        $code = rand(10000, 999999);
        session(['NoteCode' => $code, 'mobile' => $request->input('mobile'), 'NoteTime' => $_SERVER['REQUEST_TIME']]);
        NoteLog::create(['note_mobile' => $request->input('mobile'), 'note_time' => $_SERVER['REQUEST_TIME'], 'note_explain' => '短信验证']);
        return static::success($code);
    }

    /**
     * 短信验证
     * @param Request $request
     * @return 短信验证
     */
    public static function noteValidate(Request $request)
    {
        if (session('NoteCode') == $request->input('NoteCode') && session('mobile') == $request->input('mobile')) {
            return 'true';
        } else {
            return 'false';
        }
    }

}
