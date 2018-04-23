<?php

namespace App\Http\Controllers\Chat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GatewayClient\Gateway; // 引入Gateway类

class ChatController extends Controller
{
    private static $file = 'Chat.';

    public function __construct()
    {
        Gateway::$registerAddress = '127.0.0.1:1238';
    }

    /**
     * 界面展示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view(static::$file . 'index');
    }

    /**
     * 发送消息
     */
    public function say(Request $request)
    {
        Gateway::sendToAll($request->input('message')); // 发送给所有人
    }

}
