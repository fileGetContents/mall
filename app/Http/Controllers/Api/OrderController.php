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
     * Redis队列抢购
     * @param Request $request
     * @return string
     */
    public function rushPurchase(Request $request)
    {
        $id = is_null($request->id) ? 15 : $request->id;
        $buyNum = rand(1, 20);
        $Uid = rand(1, 2000);
        // 检查是否存在
        if (Redis::exists($id)) {
            dump(Redis::get($id));

            if (intval(Redis::get($id)) - $buyNum <= 0) {
                return parent::error(2);
            }
            // 加入redis队列头部
            dump(Redis::lpush('userList' . $id, serialize(['user_id' => $Uid, 'num' => $buyNum])));
            // 开始移除底部并删除
            dump(Redis::lrange('userList' . $id, 0, 100));








            $info = Redis::bpop('userList' . $id);
//            dump($info);
        } else {
            return parent::error(1);
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
