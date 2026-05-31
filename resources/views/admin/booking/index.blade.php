@extends('layouts.dashboard')

@section('title', 'Bookings')

@section('content')

<style>

    body{
    background: #111827;
}

.booking-card{
    background: rgba(25,25,25,0.95);
    border-radius: 20px;
    padding: 25px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.4);
}

.booking-title{
    color: #22c55e;
    font-size: 2rem;
    font-weight: 700;
}

.booking-badge{
    background: #22c55e;
    color: white;
    padding: 8px 15px;
    border-radius: 20px;
    font-size: 14px;
}


.booking-table{
    border-radius: 15px;
    overflow: hidden;
    color: white;
}


.booking-table thead{
    background: #14532d;
    color: white;
}



.booking-table th{
    padding: 15px;
    text-align: center;
    vertical-align: middle;
    border-color: #2d3748;
}


.booking-table td{
    padding: 12px;
    text-align: center;
    vertical-align: middle;
    background: #1f2937;
    color: white;
    border-color: #374151;
}


.booking-table tbody tr:hover td{
    background: #2d3748;
}

.status-confirmed{
    background: #16a34a;
    color: white;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 12px;
}

.status-pending{
    background: #facc15;
    color: black;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 12px;
}

.status-cancelled{
    background: #dc2626;
    color: white;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 12px;
}


.pagination{
    justify-content: center;
    margin-top: 20px;
}

</style>

<div class="container py-4">

    <div class="booking-card">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h1 class="booking-title">
                All Bookings
            </h1>

            <span class="booking-badge">
                Total Bookings : {{ $bookings->total() }}
            </span>

        </div>

        <div class="table-responsive">

            <table class="table booking-table table-bordered align-middle">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Room</th>
                        <th>Guest</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                        <th>Guests</th>
                        <th>Status</th>
                        <th>Created</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($bookings as $booking)

                    <tr>

                        <td>{{ $booking->id }}</td>

                        <td>
                            {{ $booking->room ? $booking->room->name : 'N/A' }}
                        </td>

                        <td>{{ $booking->guest_name }}</td>

                        <td>{{ $booking->guest_email }}</td>

                        <td>{{ $booking->guest_phone }}</td>

                        <td>{{ $booking->check_in }}</td>

                        <td>{{ $booking->check_out }}</td>

                        <td>{{ $booking->guests }}</td>

                        <td>

                            @if($booking->status == 'confirmed')

                                <span class="status-confirmed">
                                    Confirmed
                                </span>

                            @elseif($booking->status == 'cancelled')

                                <span class="status-cancelled">
                                    Cancelled
                                </span>

                            @else

                                <span class="status-pending">
                                    Pending
                                </span>

                            @endif

                        </td>

                        <td>
                            {{ $booking->created_at->format('Y-m-d') }}
                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="10" class="text-center">
                            No bookings yet.
                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

        <div class="mt-3">
            {{ $bookings->links() }}
        </div>

    </div>

</div>

@endsection