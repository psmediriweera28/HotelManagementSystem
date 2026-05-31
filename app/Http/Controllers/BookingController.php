<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use App\Models\Room;
use App\Mail\BookingWelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    public function create(){
        // return view('pages.booking');

        $rooms = Room::all();
        return view('pages.booking', compact('rooms'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'guest_name'  => ['required', 'string', 'max:255'],
            'guest_email' => ['required', 'email'],
            'guest_phone' => ['nullable', 'string', 'max:50'],

            // room_name comes from a select/input instead of room_id
            'room_name'   => ['required', 'string'],

            'check_in'    => ['required', 'date', 'after_or_equal:today'],
            'check_out'   => ['required', 'date', 'after:check_in'],
            'guests'      => ['required', 'integer', 'min:1'],
            'payment_method' => ['required', 'in:cash_on_arrival,bank_transfer,online_card'],
        ]);


        // find room by name
        $room = Room::where('name', $data['room_name'])->firstOrFail();

        
        // Check overlapping bookings

$existingBooking = Booking::where('room_name', $room->name)

->where(function($query) use ($data){

    $query->whereBetween('check_in', [
        $data['check_in'],
        $data['check_out']
    ])

    ->orWhereBetween('check_out', [
        $data['check_in'],
        $data['check_out']
    ])

    ->orWhere(function($q) use ($data){

        $q->where('check_in', '<=', $data['check_in'])

          ->where('check_out', '>=', $data['check_out']);
    });

})

->exists();

if($existingBooking){

    return back()->withErrors([

        'room_name' => 'Sorry! This room is already booked for selected dates.'

    ])->withInput();
}


        $roomPrice = $room->price;          // from rooms table
        $foodTotal = 0;

        // $data['room_id']       = $room->id; // optional: store id too
        $data['room_name'] = $room->name;
        $data['room_price']    = $roomPrice;
        $data['food_total']    = $foodTotal;
        $data['grand_total']   = $roomPrice + $foodTotal;
        $data['payment_status'] = 'pending';


        //1) Create Booking
        $booking = Booking::create($data);

        //2) Check if user already exists
        $user = User::where('email', $data['guest_email'])->first();

        // if(! $user){
        //     //generate random password
        //     $plainPassword = Str::random(10);

        //     //create user
        //     $user = User::create([
        //         'name' => $data['guest_name'],
        //         'email' => $data['guest_email'],
        //         'password' => Hash::make($plainPassword),
        //     ]);

        //     //3)Send email with credentials
        //     Mail::to($user->email)->send(
        //         new BookingWelcomeMail($user, $plainPassword, $booking)
        //     );
        // }

        

        return redirect()
            ->route('booking')
            ->with('success', 'Your booking request has been sent. Login Details were emailed to you.');
    }


    
}
