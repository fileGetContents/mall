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
        $user = Models\User::all();
        //     dump($user);
        foreach ($user as $value) {
            echo $value->user_password . '<br/>';
        }
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
