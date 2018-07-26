<?php

namespace App\Http\Controllers\Web;

use App\Methods\Operation;
use App\Models\ClassGood;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Schema;

class UserController extends Controller
{

    public function register()
    {
        return view('Web.register');
    }

    public function login()
    {
        return view('Web.login');
    }

    public function test(Request $request)
    {
        return view('Public.PersonalCenter');
    }

    public function geturldata($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        $content = curl_exec($ch);
        return $content;
    }


}