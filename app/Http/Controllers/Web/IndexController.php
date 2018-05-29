<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $file = 'Web.Index';

    public function index()
    {

        return view($this->file . 'Index');
    }


}
