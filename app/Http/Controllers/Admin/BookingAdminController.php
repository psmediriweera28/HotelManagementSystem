<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingAdminController extends Controller
{
    public function index() {
        //lastest Booking first
        $bookings = Booking::with('room')->orderByDesc('created_at')->paginate(10);

        return view('admin.booking.index', compact('bookings'));
    }

    public function confirm(Booking $booking)
    {
        $booking->status = "confirmed";
        $booking->save();

        return back()->with('success', 'Booking Confirmed');
    }

    public function cancel(Booking $booking)
    {
        $booking->status = 'cancelled';
        $booking->save();

        return back()->with('success', 'Booking Cancelled.');
    }
}
