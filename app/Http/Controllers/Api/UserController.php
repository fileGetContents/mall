<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Rules\Mobile;
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
    public static function newUser(Request $request)
    {

    }


}
