<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomAdminController extends Controller
{
    public function index()
    {
        $rooms = Room::all();

        return view('admin.rooms.index', compact('rooms'));
    }
}
