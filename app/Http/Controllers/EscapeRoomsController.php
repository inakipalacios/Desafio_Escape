<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\EscapeRooms;

class EscapeRoomsController extends Controller
{
    public function info($id)
    {
        $room = EscapeRooms::find($id);
        return view("escapeRoomInfo" , ['selectedRoom' => $room]);
    }
}
