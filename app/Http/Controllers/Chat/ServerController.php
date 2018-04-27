<?php

namespace App\Http\Controllers\Chat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GatewayClient\Gateway;
use App\Methods\Conversion;

class ServerController extends Controller
{

    public function say(Request $request)
    {

    }

    /**
     * 加入房间后准备程序
     * @param Request $request
     * @return string
     */
    public function bindAndGroup(Request $request)
    {
        $all = $request->all();
        Gateway::bindUid($all['client_id'], session('id')); // 绑定uid
        Gateway::setSession($all['client_id'], ['name' => session('name'), 'client' => $all['client_id'], 'id' => session('id')]); // 设置Session
        Gateway::joinGroup($all['client_id'], $all['room_id']); // 加入组
        session(['room_id' => $all['room_id']]);
        Gateway::sendToGroup($all['room_id'], json_encode(['type' => 'group', 'message' => '欢迎' . session('id')]));                // 向群聊发送消息
        return parent::success();
    }

    /**
     * 获取房间在线人数
     * @param Request $request
     * @return string
     */
    public function getUserLists(Request $request)
    {
        $all = $request->all();
        $all['room_id'] = 1;
        $sessions = Gateway::getClientSessionsByGroup($all['room_id']);
        $users = Conversion::clientSessionConversion($sessions);
        //dump($users);
        return parent::success($users);
    }
}
