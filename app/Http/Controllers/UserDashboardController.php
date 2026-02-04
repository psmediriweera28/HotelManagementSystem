<?php

namespace App\Http\Controllers;


use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserDashboardController extends Controller
{
   public function index(){
        return view('dashboard.user');
   }

   public function rooms()
    {
        $user = Auth::user();

        $bookings = Booking::where('guest_email', $user->email)
            ->orderByDesc('created_at')
            ->get();

        return view('user.rooms', compact('bookings'));
    }
}
