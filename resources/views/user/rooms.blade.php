@extends('layouts.dashboard')

@section('title', 'My Rooms')

@section('content')

<style>

body{

    background: linear-gradient(to right, #021b12, #0b3d2e);
}

/* PAGE TITLE */

.rooms-title{

    color: #22c55e;

    font-size: 30px;

    font-family: 'Playfair Display', serif;

    font-weight: bold;

    margin-bottom: 30px;

    /* font-weight: bold; */

}

/* ROOM CARD */

.room-card{

    background: rgba(255,255,255,0.08);

    backdrop-filter: blur(12px);

    border-radius: 25px;

    overflow: hidden;

    transition: 0.4s ease;

    box-shadow: 0 12px 30px rgba(0,0,0,0.35);

    height: 100%;
}

.room-card:hover{

    transform: translateY(-8px);

    box-shadow: 0 18px 40px rgba(0,0,0,0.5);
}

/* ROOM IMAGE */

.room-image{

    width: 100%;

    height: 240px;

    object-fit: cover;
}

/* CARD CONTENT */

.room-content{

    padding: 25px;
}

.room-name{

    color: white;

    font-size: 24px;

    font-weight: bold;

    margin-bottom: 18px;
}

.room-detail{

    color: rgba(255,255,255,0.8);

    margin-bottom: 10px;

    font-size: 15px;
}

.room-price{

    color: #22c55e;

    font-size: 28px;

    font-weight: bold;

    margin-top: 18px;
}

/* STATUS BADGE */

.room-badge{

    background: #22c55e;

    color: white;

    padding: 6px 14px;

    border-radius: 30px;

    font-size: 13px;

    font-weight: 600;

    display: inline-block;

    margin-bottom: 18px;
}

/* EMPTY MESSAGE */

.empty-text{

    color: rgba(255,255,255,0.8);

    font-size: 18px;
}

</style>

<div class="container py-1">

```
<h1 class="rooms-title">
    Booked Rooms
</h1>

@if($bookings->isEmpty())

    <p class="empty-text">

        You have not booked any rooms yet.

    </p>

@else

<div class="row g-4">

    @foreach($bookings as $booking)

    <div class="col-lg-6">

        <div class="room-card">

            <!-- ROOM IMAGE -->

            <img src="{{ asset('images/double.jpg') }}"
            alt="Room Image"

            class="room-image">

            <!-- CONTENT -->

            <div class="room-content">

                <span class="room-badge">

                    Confirmed Booking

                </span>

                <h2 class="room-name">

                    {{ $booking->room_name }}

                </h2>

                <p class="room-detail">

                    <strong>Check-In:</strong>
                    {{ $booking->check_in }}

                </p>

                <p class="room-detail">

                    <strong>Check-Out:</strong>
                    {{ $booking->check_out }}

                </p>

                <p class="room-detail">

                    <strong>Guests:</strong>
                    {{ $booking->guests }}

                </p>

                <h3 class="room-price">

                    LKR {{ number_format($booking->room_price, 2) }}

                </h3>

            </div>

        </div>

    </div>

    @endforeach

</div>

@endif
```

</div>

@endsection
