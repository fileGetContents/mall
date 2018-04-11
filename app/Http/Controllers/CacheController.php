<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CacheController extends Controller
{
    /**
     * 创建一个商品剩余份数的缓存
     */
    public function crate()
    {
        dump(Redis::set(15, 1000));
    }

}
