@extends('layouts.dashboard')

@section('title', 'My Payments')

@section('content')

<style>

    body{

    background: linear-gradient(to right,#021b12,#0b3d2e) !important;

    min-height:100vh;
}

.payment-title{

    color:#22c55e;

    font-size:30px;

    font-family: 'Playfair Display', serif;

    font-weight:bold;

    margin-bottom:30px;
}

.payment-card{

    background: rgba(255,255,255,0.08);

    backdrop-filter: blur(12px);

    border-radius:25px;

    padding:25px;

    box-shadow:0 12px 30px rgba(0,0,0,0.35);

    transition:0.4s ease;

    height:100%;

    color: white;
}

.payment-card label{
    color: white !important;
}

.payment-card:hover{

    transform:translateY(-8px);

    box-shadow:0 18px 40px rgba(0,0,0,0.5);
}

.payment-room{

    color:white;

    font-size:24px;

    font-weight:bold;

    margin-bottom:15px;
}

.payment-detail{

    color:rgba(255,255,255,0.85);

    margin-bottom:10px;

    font-size:15px;
}

.payment-total{

    color:#22c55e;

    font-size:30px;

    font-weight:bold;

    margin-top:15px;
}

.payment-select{

    background: #2a3142 !important;

    color:white !important;

    border:1px solid #3d4558 !important;

    border-radius:12px;
}

.payment-select option{

    color:black;
}

.payment-btn{

    background:#22c55e;

    border:none;

    border-radius:12px;

    padding:10px;

    font-weight:bold;

    transition:0.3s;
}

.payment-btn:hover{

    background:#16a34a;

    transform:translateY(-2px);
}

.summary-card{

    background: rgba(255,255,255,0.08);

    border-radius:20px;

    padding:20px;

    margin-top: -15px;

    margin-bottom:20px;

    text-align:center;
}

.summary-number{

    color:#22c55e;

    font-size:28px;

    font-weight:bold;
}

.summary-text{

    color:rgba(255,255,255,0.85);
}

.empty-text{

    color:white;

    font-size:18px;
}

.alert-success{

    color:#0f5132 !important;
}

</style>


<div class="container py-3">

    <h1 class="payment-title">

        My Payments

    </h1>

    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif

    @if($bookings->isEmpty())

        <p class="empty-text">

            You have no bookings yet.

        </p>

    @else

    {{-- Summary Section --}}

    <div class="summary-card">

        <div class="row">

            <div class="col-md-4">

                <div class="summary-number">

                    {{ $bookings->count() }}

                </div>

                <div class="summary-text">

                    Total Bookings

                </div>

            </div>

            <div class="col-md-4">

                <div class="summary-number">

                    LKR {{ number_format($bookings->sum('grand_total'),2) }}

                </div>

                <div class="summary-text">

                    Total Amount

                </div>

            </div>

            <div class="col-md-4">

                <div class="summary-number">

                    {{ $bookings->where('payment_status','pending')->count() }}

                </div>

                <div class="summary-text">

                    Pending Payments

                </div>

            </div>

        </div>

    </div>

    <div class="row g-4">

        @foreach($bookings as $booking)

        <div class="col-lg-6">

            <div class="payment-card">

                <h2 class="payment-room">

                    {{ $booking->room_name }}

                </h2>

                @if($booking->payment_status === 'paid')

                    <span class="badge bg-success mb-3">

                        Paid

                    </span>

                @else

                    <span class="badge bg-warning text-dark mb-3">

                        Pending

                    </span>

                @endif

                <p class="payment-detail">

                    <strong>Check-In:</strong>

                    {{ $booking->check_in }}

                </p>

                <p class="payment-detail">

                    <strong>Check-Out:</strong>

                    {{ $booking->check_out }}

                </p>

                <p class="payment-detail">

                    <strong>Room Price:</strong>

                    LKR {{ number_format($booking->room_price,2) }}

                </p>

                <p class="payment-detail">

                    <strong>Food Total:</strong>

                    LKR {{ number_format($booking->food_total,2) }}

                </p>

                <h3 class="payment-total">

                    LKR {{ number_format($booking->grand_total,2) }}

                </h3>

                <hr style="border-color: rgba(255,255,255,0.15);">

                <form method="POST"
                    action="{{ route('user.payments.updateMethod', $booking) }}">

                    @csrf

                    <label class="text-white mb-2">

                        Payment Method

                    </label>

                    <select
                        name="payment_method"
                        class="form-select payment-select mb-3"
                        onchange="this.form.submit()">

                        <option value="cash_on_arrival"
                            {{ $booking->payment_method === 'cash_on_arrival' ? 'selected' : '' }}>
                            Cash on Arrival
                        </option>

                        <option value="bank_transfer"
                            {{ $booking->payment_method === 'bank_transfer' ? 'selected' : '' }}>
                            Bank Transfer
                        </option>

                        <option value="online_card"
                            {{ $booking->payment_method === 'online_card' ? 'selected' : '' }}>
                            Online Card
                        </option>

                    </select>

                </form>

                <form method="POST"
                    action="{{ route('user.payments.proceed', $booking) }}">

                    @csrf

                    <button
                        class="btn payment-btn w-100">

                        Proceed Payment

                    </button>

                </form>

            </div>

        </div>

        @endforeach

    </div>

    @endif

</div>

@endsection