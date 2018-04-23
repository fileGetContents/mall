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
        //Redis::flush();
       dump(Redis::set(29, 500));
     //  dump(Redis::get(17));
    }

}
