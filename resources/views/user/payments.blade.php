@extends('layouts.dashboard')

@section('title', 'My Payments')

@section('content')
<div class="container py-4">
    <h2 class="mb-3 fs-3" style="color: green;">My Payments</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($bookings->isEmpty())
        <p>You have no bookings yet.</p>
    @else
        <table class="table table-bordered table-striped align-middle">
            <thead>
            <tr>
                <th>#</th>
                <th>Room</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Room Price</th>
                <th>Food Total</th>
                <th>Grand Total</th>
                <th>Payment Method</th>
                <th>Payment Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->room_name }}</td>
                    <td>{{ $booking->check_in }}</td>
                    <td>{{ $booking->check_out }}</td>
                    <td>LKR {{ number_format($booking->room_price, 2) }}</td>
                    <td>LKR {{ number_format($booking->food_total, 2) }}</td>
                    <td class="fw-bold">LKR {{ number_format($booking->grand_total, 2) }}</td>
                    <td>
                        <form method="POST" action="{{ route('user.payments.updateMethod', $booking) }}">
                            @csrf
                            <select name="payment_method" class="form-select form-select-sm" onchange="this.form.submit()">
                                <option value="cash_on_arrival" {{ $booking->payment_method === 'cash_on_arrival' ? 'selected' : '' }}>Cash on Arrival</option>
                                <option value="bank_transfer" {{ $booking->payment_method === 'bank_transfer' ? 'selected' : '' }}>Bank Transfer</option>
                                <option value="online_card" {{ $booking->payment_method === 'online_card' ? 'selected' : '' }}>Online Card</option>
                            </select>
                        </form>
                    </td>
                    <td>
                        @if($booking->payment_status === 'paid')
                            <span class="badge bg-success">Paid</span>
                        @else
                            <span class="badge bg-warning text-dark">Pending</span>
                        @endif
                    </td>
                    <td>
                        <form method="POST" action="{{ route('user.payments.proceed', $booking) }}">
                            @csrf
                            <button class="btn btn-sm btn-primary">
                                Proceed Payment
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
