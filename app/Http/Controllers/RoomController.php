<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index(Room $room)
    {
        return view('RLR/rooms')->with(['rooms'=> $room->get()]);
    }
}
