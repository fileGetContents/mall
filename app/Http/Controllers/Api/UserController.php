<?php

namespace App\Http\Controllers\Api;

use App\Models;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rules;
use Illuminate\Support\Facades\Redis;

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
        $input = $request->all();
        if (Redis::exists('login' . $input['telephone'])) {
            $password = Redis::get('login' . $input['telephone']);
            if ($input['password'] == $password) {
                return parent::success('redis登陆成功');
            } else {
                return parent::error('redis登陆失败');
            }
        }
        $user = Models\User::where('user_telephone', $input['telephone'])->first();
        if (is_null($user)) {
            return parent::error('账号或者密码错误');
        } else {
            if ($user->user_password == $input['password']) {
                Redis::set('login' . $input['telephone'], $user->user_password);
                Redis::expire('login' . $input['telephone'], 100000); //	EXPIRE
                session(['user_id' => $user->user_id]);
                return parent::success();
            } else {
                return parent::error('账号或者密码错误');
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
                return parent::success('取消收藏成功');
            } else {
                return parent::error('取消收藏失败');
            };
        }
        $coll = new Models\Collection();
        $coll->collection_table = $request->input('table');
        $coll->collection_tableid = $request->input('id');
        $coll->user_id = session('user_id', 2);
        $coll->collection_time = $_SERVER['REQUEST_TIME'];
        if ($coll->save()) {
            return parent::success('添加收藏成功');
        } else {
            return parent::error('添加收藏失败');
        }
    }


}
