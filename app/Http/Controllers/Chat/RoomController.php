<?php

namespace App\Http\Controllers\Chat;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Chat\Room;

class RoomController extends Controller
{
    public function lists()
    {
        $rooms = Room::select(Room::$file)->get();
        return view(static::$CHAT . 'lists', [
            'rooms' => $rooms
        ]);
    }

    public function room(Request $request)
    {
        return view(static::$CHAT . 'room', ['roomId' => $request->id]);
    }

}
