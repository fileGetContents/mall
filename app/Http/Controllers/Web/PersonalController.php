<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonalController extends Controller
{
    public function baseInfo()
    {
        $user = User::select(User::$filed)->find(session('user_id', 2));
        return view('Web.PersonalBaseInfo', ['user' => $user]);
    }
}
