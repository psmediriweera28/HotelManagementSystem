@extends('layouts.dashboard')

@section('title', 'Bookings')



@section('content')

<style>
    .h1-title{
        font-family:Arial, Helvetica, sans-serif;
        font-weight: 600;
        color: darkgreen;
        margin-bottom: 10px;
        font-size: 30px;
    }
</style>
<div class="container py-4">
    <h1 class="h1-title">All Bookings</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Room</th>
                <th>Guest</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Guests</th>
                <th>Status</th>
                <th>Created</th>
            </tr>
        </thead>
        <tbody>
            @forelse($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->room? $booking->room->name : 'N?A'}}</td>
                    <td>{{ $booking->guest_name }}</td>
                    <td>{{ $booking->guest_email }}</td>
                    <td>{{ $booking->guest_phone }}</td>
                    <td>{{ $booking->check_in }}</td>
                    <td>{{ $booking->check_out }}</td>
                    <td>{{ $booking->guests }}</td>
                    <td>{{ ucfirst($booking->status) }}</td>
                    <td>{{ $booking->created_at->format('Y-m-d H:i') }}</td>
                </tr>
                
            @empty
                <tr>
                    <td colspan="9">No bookings yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $bookings->links() }}
</div>
@endsection
