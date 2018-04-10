<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    /**
     * 创建一个商品的缓存
     */
    public function crate()
    {

        if (Cache::add(15, 20, 10)) {
            return parent::success();
        } else {
            return parent::error();
        };
    }

}
