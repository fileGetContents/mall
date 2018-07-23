<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Web\GoodController;
use App\Models\ClassGood;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Methods\Captcha;
use Illuminate\Support\Facades\Input;
use  Intervention\Image\Facades\Image;

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

    /**
     * 文件上传
     * @return 文件
     */
    public function imageUpload()
    {
        $file = base_path('public/upload/') . date('Y-m-d');
        if (!is_dir($file)) {
            mkdir($file, 0777, true);
        }
        $src = $file . '/' . rand(10000, 99999) . md5($_SERVER['REQUEST_TIME']) . '.png';
        $res = Image::make(Input::file('file'))->resize(72, 72)->save($src);
        echo asset('/upload/' . date('Y-m-d') . '/' . $res->basename);
    }

    /**
     * 获取目录
     */
    public function getAllMenu()
    {
        return ClassGood::getAllMenu();
    }
}
