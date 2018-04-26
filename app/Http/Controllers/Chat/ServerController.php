<?php

namespace App\Http\Controllers\Chat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GatewayClient\Gateway;

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
        Gateway::sendToGroup($all['room_id'], json_encode(['type' => 'group', 'message' => 'room_id']));                                                // 发送消息
        return parent::success();
    }

}
