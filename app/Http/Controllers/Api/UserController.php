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
    public function newUser(Request $request)
    {
        $mobile = User::where('user_mobile', $request->input('mobile'))->first(['user_mobile']);
        if (is_null($mobile)) {
            $bool = User::create(['user_mobile' => $request->input('mobile')]);
            if ($bool) {
                return parent::success();
            }
            return parent::error('注册失败');
        }
        return parent::error('已存在该用户');
    }


}
