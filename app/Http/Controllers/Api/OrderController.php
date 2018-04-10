<?php

namespace App\Http\Controllers\Api;

use App\Events\CreateOrder;
use App\Events\UpdateOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models;
use Illuminate\Contracts\Redis;
use Illuminate\Support\Facades\Cache;

class OrderController extends Controller
{

    /**
     *普通创建订单
     * @param Request $request
     * @return string
     */
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
                return parent::error('收货地址不存在');
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
                // 清楚关于这份清单的缓存
                Redis::del($input['good_id']);
                return parent::success();

            } else {
                return parent::error('订单创建失败');
            }
        } else {
            return parent::error('库存不足或者商品已经下架了');
        }
    }

    public function updateNotice()
    {
        $event = Models\Order::find(2);
        event(new UpdateOrder($event));
    }

    public function rushPurchase(Request $request)
    {
        $id = $request->id;
        // 检查是否纯在redis 没有则没有开始
        if (Cache::has($id)) {


        } else {
            return parent::error('还没有开始抢购');
        }
    }

}
