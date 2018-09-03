<?php

namespace App\Http\Controllers\Api;

use App\Models\Good;
use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodController extends Controller
{
    /**
     * 商品列表
     *
     */
    public function goodList(Request $request)
    {
        $shopModel = new Shop();
        $goodModel = new Good();
        $file = array_unique(array_merge(Good::$filed, Shop::$filed));
        foreach ($file as $key => $value) {
            if ($value == $shopModel->getKeyName()) {
                $file[$key] = $shopModel->getTable() . '.' . $value;
            }
        }
        $good = Good::select($file)
            ->join($shopModel->getTable(), $shopModel->getTable() . '.' . $shopModel->getKeyName(), '=', $goodModel->getTable() . '.' . $shopModel->getKeyName())
            ->paginate(2);
        return view('ajax.goodLists', ['good' => $good]);
    }

}
