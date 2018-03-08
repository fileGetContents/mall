<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Models;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
    }

    /**
     * 用户注册界面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function registered()
    {
        return view($this->file . 'Registered');
    }

    public function login()
    {
        return view($this->file . 'Login');
    }


}
