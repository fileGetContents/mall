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

    /**
     * 检查是否是注册过的
     * @param Request $request
     * @return string
     */
    public function loginTelephone(Request $request)
    {
        $this->validate($request, [
            'telephone' => ['required', new Rules\Telephone()]
        ]);
        $user = Models\User::where('user_telephone', $request->input('telephone'))->first();
        if (is_null($user)) {
            return 'false';
        } else {
            return 'true';
        }
    }

    /**
     * 用户登录
     * @param Request $request
     * @return string
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'telephone' => ['required', new Rules\Telephone()],
            'password' => ['required', new Rules\Password()]
        ]);
        $user = Models\User::where('user_telephone', $request->input('telephone'))->first();
        if (is_null($user)) {
            return collect(['message' => 'false', 'data' => '账号或者密码错误'])->toJson();
        } else {
            if ($user->user_password == $request->input('password')) {
                session(['user_id' => $user->user_id]);
                return collect(['message' => 'true', 'data' => ''])->toJson();
            } else {
                return collect(['message' => 'false', 'data' => '账号或者密码错误'])->toJson();
            }
        }
    }

    /**
     * 添加/取消 收藏
     * @param Request $request
     * @return string
     */
    public function collectionAdd(Request $request)
    {
        $this->validate($request, [
            'id' => ['required', 'numeric'],
            'table' => ['required']
        ]);
        $all = $request->all();
        $isColl = Models\Collection::where('collection_tableid', $all['id'])
            ->where('user_id', session('user_id', 2))
            ->where('collection_table', $all['table'])
            ->first();
        if (!is_null($isColl)) {
            if ($isColl->forceDelete()) {
                return collect(['message' => 'success', 'data' => '取消收藏成功']);
            } else {
                return collect(['message' => 'error', 'data' => '取消收藏失败']);
            };
        }
        $coll = new Models\Collection();
        $coll->collection_table = $request->input('table');
        $coll->collection_tableid = $request->input('id');
        $coll->user_id = session('user_id', 2);
        $coll->collection_time = $_SERVER['REQUEST_TIME'];
        if ($coll->save()) {
            return collect(['message' => 'success', 'data' => '添加收藏成功'])->toJson();
        } else {
            return collect(['message' => 'error', 'data' => '添加收藏失败'])->toJson();
        }
    }


}
