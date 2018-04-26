<?php

namespace App\Http\Controllers\Chat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GatewayClient\Gateway; // 引入Gateway类
use App\Methods\Conversion;

class ChatController extends Controller
{

//    public function __construct()
//    {
//        Gateway::$registerAddress = '127.0.0.1:1238';
//    }

    /**
     * 界面展示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view(static::$CHAT . 'index');
    }

    /**
     * 发送消息
     */
    public function say(Request $request)
    {
        $all = $request->all();
        if ($all['uid'] != '') {
            Gateway::sendToUid($all['uid'], json_encode(['type' => 'client', 'message' => $all['message']])); // 向指定的客户端发送消息
            //    Gateway::sendToCurrentClient(json_encode(['type' => 'self', 'message' => $all['message']]));   // 向自己发送
            return 'true';
        }
        Gateway::sendToAll(json_encode(['type' => 'all', 'message' => $all['message']])); // 发送给所有人
        return 'true';
    }

    /**
     * 绑定信息
     * @param Request $request
     * @throws \Exception
     */
    public function bindUid(Request $request)
    {
        $uid = rand(10, 10000);
        if ($request->session()->has('user_id')) {
            $uid = session('user_id');
        } else {
            session(['user_id' => $uid]);
        }
        Gateway::bindUid($request->input('client_id'), $uid);
        session(['client_id' => $request->input('client_id')]);
        Gateway::setSession($request->input('client_id'), ['name' => $uid]);
        Gateway::sendToAll(json_encode(['type' => 'new', 'message' => '欢迎' . $uid . '加入'])); // 发送加入信息
    }

    /**
     * 更新用户列表
     */
    public function getUserList()
    {
        $all = Gateway::getAllClientSessions();
        return json_encode(Conversion::clientSessionConversion($all));
    }
}
