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
        $id = is_null($request->id) ? 15 : $request->id;
        // 检查是否纯在redis 没有则没有开始
        if (Cache::has($id)) {
            $buyNum = 10; //rand(1, 30);        // 随机产生抢购数额
            $userId = rand(1, 200000);    // 随机产生用户id
            // 检查剩余数量是否足够
            if (Cache::get($id) < 0) {
                return parent::error('剩余份数足,抢购失败');
            }
            $hasNum = Cache::get($id);
            if ($hasNum - $buyNum >= 0) {
                if (Cache::decrement($id, $buyNum) >= 0) {
                    //删除关于这个商品抢购记录
                    if (Cache::has($id . $userId)) {
                        Cache::forget($id . $userId);
                    }
                    if (Cache::add($id . $userId, $buyNum, 20)) { // 记录成功
                        return static::redisCreateOrder($id . $userId, $buyNum, $userId, $id);
                    } else {
                        //return parent::error('抢购成功');
                        Log::info('缓存错误');
                        return parent::error('网络延迟');
                    }
                } else {
                    return parent::error('抢购失败');
                }
            } else {
                return parent::error('剩余份数不足');
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
                'admin_id' => $num
            ]);
            if ($bool) {
                Cache::forget($key); // 删除存在的redis
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
