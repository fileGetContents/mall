<?php

namespace App\Http\Controllers\Chat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TerminalController extends Controller
{

    public function terminal()
    {
        return view('Chat.Terminal');
    }


}