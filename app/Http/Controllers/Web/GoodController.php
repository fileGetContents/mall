<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodController extends Controller
{

    public function detailed(Request $request)
    {
        return view('Web.GoodDetailed');
    }

    public function lists(Request $request)
    {
        return view('Web.GoodLists');
    }


}
