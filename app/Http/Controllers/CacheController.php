<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class CacheController extends Controller
{
    /**
     * 创建一个商品的缓存
     */
    public function crate()
    {
//        Cache::flush();
//        if (Cache::add(15, 200, 10)) {
//            return parent::success();
//        } else {
//            return parent::error();
//        };
        //      echo Cache::get(15);
        //   Redis::lpush('test','test');
//        Cache::lpush('names', 7);
//        Cache::lpush('names', 8);
//        dump(Cache::lrange('names',0,20));
    }

}
