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
        dump(preg_match('/^1[34578]\d{9}$/', '1828019533'));
    }

    /**
     * 用户注册界面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function registered()
    {

        return view($this->file . 'registered');
    }


}
