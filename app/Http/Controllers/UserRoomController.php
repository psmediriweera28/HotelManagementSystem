<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class UserRoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();

        return view('user.rooms.index', compact('rooms'));
    }
}
