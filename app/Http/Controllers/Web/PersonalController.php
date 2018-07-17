<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonalController extends Controller
{
    public function baseInfo()
    {
        return view('Web.PersonalBaseInfo');
    }
}
