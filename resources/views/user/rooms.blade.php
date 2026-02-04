@extends('layouts.dashboard')

@section('title', 'My Rooms')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 fs-4 fw-semibold"  style="color:green;">My Booked Rooms</h2>

    @if($bookings->isEmpty())
        <p>You have not booked any rooms yet.</p>
    @else
        <table class="table table-bordered table-striped align-middle">
            <thead>
            <tr>
                <th>#</th>
                <th>Room</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Guests</th>
                <th>Room Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->room_name }}</td>
                    <td>{{ $booking->check_in }}</td>
                    <td>{{ $booking->check_out }}</td>
                    <td>{{ $booking->guests }}</td>
                    <td>LKR {{ number_format($booking->room_price, 2) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
