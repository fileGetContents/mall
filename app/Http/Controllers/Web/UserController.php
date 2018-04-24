<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Models;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Log;
use App\Methods\Coupon;

class UserController extends Controller
{
    private $file = 'Web.User';

    public function index()
    {
        // dump(Models\User::find(2));
        $user = new Models\User();
        $user->setConnection('mysql2');
        $data = $user->find(3);
        dump($data->user_nickname);
    }

    public function index2()
    {

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
