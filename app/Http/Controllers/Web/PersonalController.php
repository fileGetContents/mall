<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models;

class PersonalController extends Controller
{
    private $file = 'Web.Per';

    /**
     * 消息
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function message()
    {
        return view($this->file . 'Message');
    }

    /**
     * 地址
     * @return $this
     */
    public function address()
    {
        $view['address'] = Models\Address::where('user_id', session('user_id', 2))
            ->select(Models\Address::file())
            ->get();
        $view['pro'] = Models\Province::select(Models\Province::file())->get();
        $view['city'] = Models\City::where('province_id', '110000')->select(Models\City::file())->get();
        $view['area'] = Models\Area::where('city_id', '110100')->select(Models\Area::file())->get();
        return view($this->file . 'Address')->with($view);
    }

}
