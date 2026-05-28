@extends('layouts.app')

@section('title', 'Rooms')

@section('content')

<style>
    .room-name{
       text-align: 
    }

    .room-text{
       padding: 4px;
       padding-left: 20px;
       color: #22c55e;
        
    }

    .card-title{
        text-align:start;
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        color: white;
        padding-top: 8px;
    }

    .price-tag{
        text-align: right;
        color: #22c55e;
        font-weight: bold;
        font-size: 30px;
    }

    .check-list{

    }

    .check-list li::before{
        content: "\2714"; /* ✔ */
        color: darkgreen;
        font-weight: bold;
        margin-right: 10px;
    }

    .room-card{
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        overflow: hidden;
        transition: 0.4s ease;
        color: white;
    }

    .room-card:hover{
        transform: translate(-10px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
    }

    .room-image{
        height: 100%;
        object-fit: cover;
        transition: 0.5s ease;
        margin-left: 15px;
        
    }

    .room-card:hover .room-image{
        transform: scale(1.05);
    }
</style>

<section class="section-part py-0" style="background: transparent;">
    <div class="container">
    <div class="text-center mb-5">

    <h1 class="display-4 fw-bold text-white"
    style="font-family:'Playfair Display', serif;">

        Luxury Rooms & Suites

    </h1>

    <p class="text-light mt-3">

        Discover our premium rooms designed for comfort and elegance.

    </p>

</div>
    <div class="row g-5">
        <div class="col-g-4">
            <div class="p-4 border rounded shadow-sm h-100">

            {{-- Room No 01 --}}
    <div class="card room-card mb-4 border-0">
    <div class="row g-0">
        {{-- Room 01 --}}
        <!-- Image column -->
        <div class="col-md-4">
            <h4 class="room-text">Deluxe Mountain View Room</h4>
            <img src="{{ asset('images/double.jpg') }}" class="img-fluid room-image" alt="Room image" width="300">
        </div>
        <!-- Text column -->
        <div class="col-md-8">
            <div class="card-body py-2 px-3">
                
                {{-- <h4 class="card-title mb-3">
                    Double Room with Mountain View
                </h4> --}}
                <ul class="mt-5">
                    <li>1 twin bed</li>
                    <li>Private bathroom</li>
                    <li>Free toiletries</li>
                    <li>Garden View</li>
                    <li>Mountain view</li>
                    
                </ul>

                <ul class="check-list" style="list-style-type: none">
                        <li>Breakfast Include</li>
                </ul>


                <h3 class="price-tag">LKR 4,178</h3>

                <div class="text-end mt-3">

                    <a href="/booking"
                    class="btn btn-success px-4 py-2">

                        Book Now

                    </a>

                </div>
            </div>
        </div>

    </div>
</div>


        {{-- Room No 02 --}}
<div class="card room-card mb-4 border-0">
    <div class="row g-0">
        {{-- Room 01 --}}
        <!-- Image column -->
        <div class="col-md-4">
            <h4 class="room-text">Premium Single Garden Room</h4>
            <img src="{{ asset('images/single.jpg') }}" class="img-fluid room-image" alt="Room image" width="300">
        </div>
        <!-- Text column -->
        <div class="col-md-8">
            <div class="card-body py-2 px-3">
                
                {{-- <h4 class="card-title mb-3">
                    Single Room with Graden View
                </h4> --}}
                <ul class="mt-5">
                    <li>1 Single bed</li>
                    <li>Private bathroom</li>
                    <li>Free toiletries</li>
                    <li>Garden View</li>
                    <li>Mountain view</li>
                    <li>Free Wi-Fi</li>
                    
                </ul>

                <ul class="check-list" style="list-style-type: none">
                        <li>Breakfast Include</li>
                </ul>


                <h3 class="price-tag">LKR 2,570</h3>
                <div class="text-end mt-3">

                    <a href="/booking"
                    class="btn btn-success px-4 py-2">

                        Book Now

                    </a>

                </div>
            </div>
        </div>

    </div>
</div>

    {{-- Room No 03 --}}
<div class="card room-card mb-4 border-0">
    <div class="row g-0">

        {{-- Room 01 --}}
        <!-- Image column -->
        <div class="col-md-4">
            <h4 class="room-text">Twin City View Suite</h4>
            <img src="{{ asset('images/bdroom.jpg') }}" class="img-fluid room-image" alt="Room image" width="300">
        </div>
        <!-- Text column -->
        <div class="col-md-8">
            <div class="card-body py-2 px-3">
                
                {{-- <h4 class="card-title mb-3">
                    Twin Room with City View
                </h4> --}}
                <ul class="mt-5">
                    <li>2 twin bed</li>
                    <li>Private bathroom</li>
                    <li>Free toiletries</li>
                    <li>City View</li>
                    <li>Flat-Screen TV</li>
                    
                </ul>

                <ul class="check-list" style="list-style-type: none">
                        <li>Breakfast Include</li>
                </ul>


                <h3 class="price-tag">LKR 4,270</h3>
                <div class="text-end mt-3">

                    <a href="/booking"
                    class="btn btn-success px-4 py-2">

                        Book Now

                    </a>

                </div>
            </div>
        </div>

    </div>
</div>


    
<div class="card room-card mb-4 border-0">
    <div class="row g-0">
        {{-- Room 02 --}}
        <!-- Image column -->
        <div class="col-md-4">
            <h4 class="room-text">Family Farm View Suite</h4>
            <img src="{{ asset('images/familyroom.jpg') }}" class="img-fluid room-image" alt="Room image" width="300">
        </div>
        <!-- Text column -->
        <div class="col-md-8">
            <div class="card-body py-2 px-3">
                
                {{-- <h4 class="card-title mb-3">
                    Family Room with Farm View
                </h4> --}}
                <ul class="mt-5">
                    <li>1 double bed & single bed</li>
                    <li>Private bathroom</li>
                    <li>Free toiletries</li>
                    <li>Seating area</li>
                    <li>Free Wi-Fi</li>
                    
                </ul>

                <ul class="check-list" style="list-style-type: none">
                        <li>Breakfast Include</li>
                </ul>


                <h3 class="price-tag">LKR 9,740</h3>
                <div class="text-end mt-3">

                    <a href="/booking"
                    class="btn btn-success px-4 py-2">

                        Book Now

                    </a>

                </div>
            </div>
        </div>

    </div>
</div>

            </div>
        </div>
    </div>
</div>
</section>

@endsection