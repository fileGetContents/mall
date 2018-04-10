<?php

namespace App\Http\Controllers\Api;

use App\Events\CreateOrder;
use App\Events\UpdateOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models;
use Illuminate\Contracts\Redis;
use Illuminate\Support\Facades\Cache;
use Log;

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

    /**
     * Redis抢购
     * @param Request $request
     * @return string
     */
    public function rushPurchase(Request $request)
    {
        $id = $request->id;
        // 检查是否纯在redis 没有则没有开始
        if (Cache::has($id)) {
            $buyNum = rand(1, 10);        // 随机产生抢购数额
            $userId = rand(1, 200000);    // 随机产生用户id
            // 检查剩余数量是否足够
            $num = Cache::decrement($id, $buyNum);
            if ($num < 0) {
                Cache::increment($id, $buyNum);
                return parent::error('剩余份数足,抢购失败');
            } else {
                //删除关于这个商品抢购记录
                if (Cache::has($id . $userId)) {
                    Cache::forget($id . $userId);
                }
                if (Cache::add($id . $userId, $buyNum, 20)) {
                    Log::info('缓存错误');
                    return parent::error('网络延迟');
                } else {
                    return static::redisCreateOrder(id . $userId, $buyNum, $userId, $id);
                    //return parent::error('抢购成功');
                }
            }
        } else {
            return parent::error('还没有开始抢购');
        }
    }

    /**
     * 创建生订单
     * @return string
     */
    private static function redisCreateOrder($key, $num, $uId, $gId)
    {
        if (Cache::has($key)) {
            $mes = new Models\Message();
            $bool = $mes->insert([
                'message_title' => '成功了耶' . rand(100, 200),
                'message_text' => 'good' . $gId,
                'message_time' => $_SERVER['REQUEST_TIME'],
                'message_form' => '哈哈哈' . $num,
                'user_id' => $uId,
                'admin_id' => 2
            ]);
            if ($bool) {
                return parent::success('购买成功');
            } else {
                return parent::error('购买失败');
            }
        } else {
            Log::info('失败2');
            return parent::error();
        }
    }

}
