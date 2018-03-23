<?php

namespace App\Http\Controllers\Api;

use App\Events\CreateOrder;
use App\Events\UpdateOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models;

class OrderController extends Controller
{

    public function create(Request $request)
    {
        $input = $request->all();
        if (Models\Good::hasInvento($input['good_id'])) {
            $all['order_num'] = 1;
            $all['user_id'] = session('user_id', 2);
            $all['good_id'] = $input['good_id'];
            $all['order_time'] = $_SERVER['REQUEST_TIME'];
            $all['order_status'] = 0;
            $address = Models\Address::find($input['address_id']);
            if (is_null($address)) {
                return collect(['message' => 'error', 'data' => '收货地址不存在'])->toJson();
            }
            $all['order_address'] = serialize([$address->province, $address->city, $address->area, $address->address_live]);
            $all['order_telephone'] = $address->address_telephone;
            $all['order_name'] = $address->address_name;
            $all['order_price'] = 100;
            $order = new Models\Order();
            $all['order_serial'] = $order->createSerial();
            if ($order->insert($all)) {
                // 分发事件
                $event = Models\Order::where('order_serial', $all['order_serial'])->first();
                event(new CreateOrder($event));
                return collect(['message' => 'success', 'data' => ''])->toJson();
            } else {
                return collect(['message' => 'error', 'data' => '订单创建失败'])->toJson();
            }
        } else {
            return collect(['message' => 'error', 'data' => '库存不足或者商品已经下架了'])->toJson();
        }
    }


    public function updateNotice()
    {
        $event = Models\Order::find(2);
        event(new UpdateOrder($event));
    }

}
