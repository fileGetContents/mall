<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Models;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    private $file = 'Web.User';

    public function index()
    {
//        dump(preg_match('/^1[34578]\d{9}$/', '1828019533'));
//        $sql = Models\User::select(Models\User::field())->where('user_telephone', '18280195336')->toSql();
//        dump($sql);
//        $user = Models\User::where('user_telephone', '18280195336')->first();
//        dump($user->user_password);
//        $good=new Models\Good();
//        $city = Models\Area::find(1)->city;
//        dump($city);
        return rand(100000, 999999) . date('Ymd') . substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
    }

    /**
     * 用户注册界面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function registered()
    {
        return view($this->file . 'Registered');
    }

    /**
     * 用户登录
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login()
    {
        return view($this->file . 'Login');
    }

    /**
     * 结算订单
     * @param $id
     * @return $this
     */
    public function order($id)
    {
        $view['address'] = Models\Address::select(Models\Address::file())
            ->where('user_id', session('user_id', 2))
            ->get();
        $view['good'] = Models\Good::find($id);
        return view($this->file . 'Order')->with($view);
    }


}
