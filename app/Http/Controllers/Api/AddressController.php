<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models;

class AddressController extends Controller
{
    public function city(Request $request)
    {
        $city = Models\Province::find($request->input('id', 1))->city;

    }
}
