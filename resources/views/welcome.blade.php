@extends('layouts.app')

@section('content')
<style>
    .hero-wrapper {
        position: relative;
        height: calc(100vh - 70px);   /*full window minus navbar */
        /* height: 500px; */
        overflow: visible;
    }

    .hero-bg {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url("{{ asset('images/home.jpg') }}");
        background-size: cover;
        background-position: center;
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;                   /* above image */
        min-height: calc(100vh - 70px);
        display: flex;
        align-items: flex-start;          /*vertical center */
        padding-left:  3rem;
        padding-top: 2rem;           /* move away from left edge */
        overflow: visible;
    }

    .availability-card {
        border-radius: 5px;
        /* max-width: 420px; */
        width: 300px;
        height: 420px;
        background-color: #ffffffee;
    }

    .content{
        color: rgb(21, 40, 21);
        font-family:Georgia, 'Times New Roman', Times, serif;
        text-align: center;
        margin-top: 6px;
        margin-bottom: 2px;
    }

    .why-choose{
        margin-bottom: 0%;
    }

    .tagline{
        font-weight: 100;
        font-family: 'Playfair Display', serif;
        font-size: 25px;
    }
    
</style>

@if(@session('success'))
    <div class="alert alert-success mb-3">
        {{session('success')}}

    </div>
    
@endif




<div class="hero-wrapper">
    <div class="hero-bg"></div>

    <div class="hero-content">
        {{-- <div class="card shadow-lg border-0 p-3 availability-card" >
            <h3 class="fw-semibold mb-2" style="font-family:sans-serif">
                Check Availability
            </h3>

            <form method="POST" action="{{ route('availability.check') }}">
                @csrf

                <div class="mb-2">
                    <label class="form-label small text-uppercase">Check‑in</label>
                    <input type="date" name="check_in" class="form-control">
                </div>

                <div class="mb-2">
                    <label class="form-label small text-uppercase">Check‑out</label>
                    <input type="date" name="check_out" class="form-control">
                </div>

                <div class="mb-2">
                    <label class="form-label small text-uppercase">Rooms</label>
                    <input type="number" name="rooms" class="form-control" min="1" value="1">
                </div>

                <div class="mb-2">
                    <label class="form-label small text-uppercase">Guests</label>
                    <input type="number" name="guests" class="form-control" min="1" value="1">
                </div>

                <button type="submit" class="btn btn-success w-100">
                    Check Availability
                </button>
            </form> --}}
        </div>
    </div>
</div>

<section class="content">
    <h1>Welcome to DIO Green Hilltop</h1>
</section>

<section class="py-5 pt-2 bg-white why-choose">
        <div class="container text-center">
            <h2 class="mb-2 tagline">Creating Memories, One Stay at a Time</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <img src="{{ asset('images/bdroom.jpg')}}" alt="icon_courses" width="250" class="mb-3">
                        <h5 class="fw-semibold mb-2">Comfortable Rooms & Suites</h5>
                        <p class="text-muted mb-0">Relax in well-furnished rooms with modern amenities, designed to give you a peaceful and memorable stay.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <img src="{{ asset('images/hospitality.jpg')}}" alt="icon_collaboration" width="300" class="mb-3">
                        <h5 class="fw-semibold mb-2">Exceptional Hospitality</h5>
                        <p class="text-muted mb-0">Enjoy world-class service with 24/7 support, friendly staff, room service, and personalized guest care.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <img src="{{ asset('images/booking.jpg')}}" alt="icon_progress" width="200" class="mb-3">
                        <h5 class="fw-semibold mb-2">Easy Booking & Management</h5>
                        <p class="text-muted mb-0">Book rooms effortlessly, manage reservations, check availability, and enjoy a smooth hotel experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg navbar-dark  fixed-bottom py-1" style="background-color: #2c9f47 ">
        <div class="container justify-content-center">
            <span class="navbar-text text-white">
                © {{ date('Y') }} DIO Green Hilltop. All rights reserved.
            </span>
        </div>
    </nav>
    

@endsection




