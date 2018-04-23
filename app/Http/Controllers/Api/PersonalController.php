<?php

namespace App\Http\Controllers\Api;

use App\Models;
use Faker\Provider\el_GR\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rules;

class PersonalController extends Controller
{
    /**
     * @param $id
     * @return string
     */
    public function getUserMessage($id)
    {
        $id = is_null($id) ? session('user_id') : $id;
        $message = Models\Message::where('user_id', $id)->orderBy('message_time', 'desc')->first();
        if (is_null($message)) {
            return parent::success();
        } else {
            return parent::error($message);
        }
    }

    /*
     * @param Request $request
     * @return string
     */
    public function saveAddress(Request $request)
    {
        $this->validate($request, [
            'province' => 'required',
            'city' => 'required',
            'area' => 'required',
            'address_live' => ['required', 'min:6'],
            'address_name' => ['required', new Rules\ChinaName()],
            'address_telephone' => ['required', new Rules\Telephone()]
        ]);
        $all = $request->all();
        $all['user_id'] = session('user_id', 2);
        $all['address_time'] = $_SERVER['REQUEST_TIME'];
        $hasOne = Models\Address::where('user_id', session('user_id', 2))->where('address_tag', 1)->first();
        if (is_null($hasOne)) {
            $all['address_tag'] = 1;
        }
        $address = new Models\Address();
        if ($address->insert($all)) {
            return parent::success();
        } else {
            return parent::error();
        }
    }

}
