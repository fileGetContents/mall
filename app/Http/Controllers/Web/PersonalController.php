<?php

namespace App\Http\Controllers\Web;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonalController extends Controller
{
    private $file = 'Web.Per';

    public function message()
    {

        return view($this->file . 'Message');
    }
}
