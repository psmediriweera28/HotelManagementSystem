@extends('layouts.app')

@section('title', 'Booking')

@section('content')

<style>

.booking-section{

    min-height: 100vh;

    background:
    linear-gradient(rgba(0,0,0,0.7),
    rgba(0,0,0,0.7)),

    url('{{ asset('images/home02.jpg') }}');

    background-size: cover;

    background-position: center;
}

.booking-card{

    background: rgba(255,255,255,0.08);

    backdrop-filter: blur(12px);

    border-radius: 20px;

    color: white;

    box-shadow: 0 15px 35px rgba(0,0,0,0.5);
}

.booking-title{

    font-family: 'Playfair Display', serif;

    font-size: 30px;

    font-weight: bold;

    text-align: center;

    margin-bottom: 40px;
}

.form-label{

    font-weight: 600;

    margin-bottom: 8px;
}

.form-control,
.form-select{

    background: rgba(255,255,255,0.1);

    border: none;

    color: white;

    padding: 12px;

    border-radius: 12px;
}

.form-control:focus,
.form-select:focus{

    box-shadow: 0 0 10px #22c55e;

    background: rgba(255,255,255,0.15);

    color: white;
}

.form-select{

    appearance: none;

    background-image:
    url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='white' viewBox='0 0 16 16'%3E%3Cpath d='M1.5 5l6 6 6-6'/%3E%3C/svg%3E");

    background-repeat: no-repeat;

    background-position: right 15px center;

    background-size: 15px;
}

.btn-book{

    background: #16a34a;

    border: none;

    padding: 14px 35px;

    border-radius: 12px;

    font-weight: bold;

    transition: 0.3s ease;
}

.btn-book:hover{

    background: #15803d;

    transform: translateY(-3px);
}

::placeholder{
    color: rgba(255, 255, 255, 0.7);
}

option{

    background: #01321f;

    color: white;
}

</style>

<section class="booking-section py-3">
<div class="container">
<div class="booking-card p-3">
    <h1 class="booking-title">
    Reserve Your Luxury Stay
</h1>

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
            <button type="submit" class="btn btn-book">
                Submit Booking
            </button>
        </div>
    </form>
</div>
</div>

</section>
@endsection
