<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models;
use Illuminate\Support\Facades\Cache;
use Log;

class GoodController extends Controller
{
    private $file = 'Web.Good';

    /**
     * 商品详情
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detailed(Request $request)
    {
        $id = is_null($request->id) ? 15 : $request->id;
        $good = Cache::get($id);
        if (is_null($good)) {
            $good = Models\Good::find($id);
            Cache::add($id, $good->toJson(), 5);
        } else {
            $good = json_decode($good);
        }
        return view($this->file . 'Detailed', [
            'good' => $good
        ]);
    }

}
