<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models;
use Illuminate\Support\Facades\Cache;

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
        $good = Models\Good::find($id);
        return view($this->file . 'Detailed', [
            'good' => $good
        ]);
    }

}
