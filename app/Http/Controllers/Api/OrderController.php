<?php

namespace App\Http\Controllers\Api;

use App\Events\CreateOrder;
use App\Events\UpdateOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models;
use Illuminate\Support\Facades\Redis;
use Log;

class OrderController extends Controller
{

    /**
     * 普通创建订单
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

    /**
     * Redis队列抢购
     * @param Request $request
     * @return string
     */
    public function rushPurchase(Request $request)
    {
        $id = is_null($request->id) ? 29 : $request->id;
        $buyNum = rand(1, 20);
        $Uid = rand(1, 2000);
        // 检查是否存在
        if (Redis::exists($id)) {
            // 检查库存
            if (intval(Redis::get($id)) - $buyNum < 0) {
                echo 4;
                return;
                // return parent::error(1);
            }
            // 加入redis队列头部
            Redis::lpush('userList' . $id, serialize(['user_id' => $Uid, 'num' => $buyNum, 'id' => $id]));
            // 获取队列长度
            $arrLen = array_fill(0, Redis::llen('userList' . $id), 'good'); // 返回同等长度数组
            foreach ($arrLen as $key => $value) {  // 开始一个一个取出用户
                $info = Redis::rpop('userList' . $id); // 取出用户购买
                $info = unserialize($info);
                if (intval(Redis::get($id)) - $info['num'] >= 0) {  // 检查是否有购买资格
                    if (Redis::decrby($id, $info['num']) >= 0) { // 再次检查是否有购买资格 DECRBY
                        Redis::setnx($id . $Uid, serialize($info)); // 设置缓存并且只能缓存一次
                    } else {
                        Redis::incrby($id, $info['num']);  // 失去的份数加回来
                    }
                }
            }
            static::redisCreateOrder($id . $Uid);    // 单项进行输出
        } else {
            echo 3;
            return;
        }
    }

    /**
     * 创建生订单
     * @return string
     */
    private static function redisCreateOrder($key)
    {
        if (Redis::exists($key)) {
            $info = Redis::get($key);
            $info = unserialize($info);
            if ($info == false) {  // 删除因为系统执行失败的订单
                echo 10;
                return;
            }
            $mes = new Models\Message();
            $bool = $mes->insert([
                'message_title' => serialize($info),//serialize($info),
                'message_text' => 'good' . $info['id'],
                'message_time' => $_SERVER['REQUEST_TIME'],
                'message_form' => $info['user_id'],
                'user_id' => $info['num'],
                'admin_id' => 1,
            ]);
            if ($bool) {
                echo 1;
                return;
            } else {
                echo 2;
                return;
            }
        }
        echo 5;
        return;
    }

}
