@extends('layouts.app')

@section('title', 'Booking')

@section('content')
<div class="container py-2">
    <h1>Room Booking</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('booking.store') }}" method="POST" class="row g-3">
        @csrf

        <div class="col-md-6">
            <label class="form-label">Full Name</label>
            <input type="text" name="guest_name" class="form-control"
                   value="{{ old('guest_name') }}" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Email</label>
            <input type="email" name="guest_email" class="form-control"
                   value="{{ old('guest_email') }}" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Phone</label>
            <input type="text" name="guest_phone" class="form-control"
                   value="{{ old('guest_phone') }}">
        </div>

        <div class="col-md-6">
    <label class="form-label">Room</label>
    <select name="room_name" class="form-select" required>
        <option value="">Select a room</option>
        @foreach($rooms as $room)
            <option value="{{ $room->name }}">
                {{ $room->name }} (Max {{ $room->capacity }} guests) - LKR {{ number_format($room->price, 2) }}
            </option>
        @endforeach
    </select>
    </div>


        <div class="col-md-3">
            <label class="form-label">Check‑in</label>
            <input type="date" name="check_in" class="form-control"
                   value="{{ old('check_in') }}" required>
        </div>

        <div class="col-md-3">
            <label class="form-label">Check‑out</label>
            <input type="date" name="check_out" class="form-control"
                   value="{{ old('check_out') }}" required>
        </div>

        <div class="col-md-3">
            <label class="form-label">Guests</label>
            <input type="number" name="guests" min="1" class="form-control"
                   value="{{ old('guests', 1) }}" required>
        </div>

        <div class="mb-3">
    <label for="payment_method" class="form-label">Payment Method</label>
    <select name="payment_method" id="payment_method" class="form-select" required>
        <option value="">Select a payment method</option>
        <option value="cash_on_arrival" {{ old('payment_method') == 'cash_on_arrival' ? 'selected' : '' }}>
            Cash on Arrival
        </option>
        <option value="bank_transfer" {{ old('payment_method') == 'bank_transfer' ? 'selected' : '' }}>
            Bank Transfer
        </option>
        <option value="online_card" {{ old('payment_method') == 'online_card' ? 'selected' : '' }}>
            Online Card
        </option>
    </select>

    @error('payment_method')
        <div class="text-danger small">{{ $message }}</div>
    @enderror
</div>


        <div class="col-12">
            <button type="submit" class="btn btn-success">
                Submit Booking
            </button>
        </div>
    </form>
</div>
@endsection
