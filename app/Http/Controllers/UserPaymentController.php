<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use App\Models\FoodOrder;

class UserPaymentController extends Controller
{
    public function index()
    {
        // Get bookings for the currently logged-in user email
        $user = Auth::user();

        $bookings = Booking::where('guest_email', $user->email)
            ->orderByDesc('created_at')
            ->get();

            // sum all food orders for this user
    $foodTotal = FoodOrder::where('user_id', $user->id)
        ->sum('total_price');

    if ($bookings->isNotEmpty()) {
        $latest = $bookings->first();

        $latest->food_total  = $foodTotal;
        $latest->grand_total = $latest->room_price + $foodTotal;

        // persist if you want it saved in DB:
        $latest->save();
    }


        return view('user.payments', compact('bookings'));
    }

    public function updateMethod(Request $request, Booking $booking)
    {
        $this->authorizeBooking($booking);

        $data = $request->validate([
            'payment_method' => ['required', 'in:cash_on_arrival,bank_transfer,online_card'],
        ]);

        $booking->update(['payment_method' => $data['payment_method']]);

        return back()->with('success', 'Payment method updated.');
    }

    public function proceed(Booking $booking)
    {
        $this->authorizeBooking($booking);

        // later plug real gateway; for now just mark as pending
        $booking->update(['payment_status' => 'pending']);

        return back()->with('success', 'Payment process started. Please follow the hotel payment instructions.');
    }

    protected function authorizeBooking(Booking $booking)
    {
        if ($booking->guest_email !== auth()->user()->email) {
            abort(403);
        }
    }


}
