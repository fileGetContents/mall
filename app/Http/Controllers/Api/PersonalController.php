<?php

namespace App\Http\Controllers\Api;

use App\Models;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonalController extends Controller
{
    public function getUserMessage($id)
    {
        $id = is_null($id) ? session('user_id') : $id;
        $message = Models\Message::where('user_id', $id)->orderBy('message_time', 'desc')->first();
        if (is_null($message)) {
            return collect(['message' => 'false', 'data' => ''])->toJson();
        } else {
            return collect(['message' => 'true', 'data' => $message])->toJson();
        }
    }
}
